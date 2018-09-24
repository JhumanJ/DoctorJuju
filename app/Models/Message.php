<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;

class Message extends Model
{
    public $table = 'messages';

    public $fillable = [
        'reminder_id',
        'text_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    public $casts = [
        'reminder_id' => 'integer',
        'text_id'     => 'integer',
    ];

    /**
     * Validation rules
     */
    public static function rules( $merge = [] )
    {
        return array_merge(
            [
                'reminder_id' => 'nullable|integer|exists:reminders,id',
                'text_id'     => 'nullable|integer|exists:messages_texts,id',
            ],
            $merge
        );
    }

    /**
     * Find text message to send, in the following order:
     *
     * - Message for that date and this reminder
     * - Message for that date
     *
     * Else, pick the message that was picket the less among
     * - Message for that reminder
     * - Message for this user
     * - Default message (not dedicated to a specific user)
     *
     */

    private function findMessage()
    {

        // Message for that date and this reminder by user
        $messageText = MessageText::where( 'reminder_id', $this->reminder_id )
                                  ->whereDate( 'date', '=', Carbon::now() )->first();

        // Message for that date
        if ( ! $messageText ) {
            $messageText = MessageText::whereDate( 'date', '=', Carbon::now() )->first();
        }

        // Get all possible messages and find the least used
        if ( ! $messageText ) {
            $messageTexts = MessageText::where( 'reminder_id', $this->reminder->id )
                                       ->orWhere( 'user_id', $this->reminder->user_id )
                                       ->orWhere( 'user_id', null )->get();

            $messageCount = -1;
            foreach ($messageTexts as $msgTxt) {
                $count = self::where('reminder_id',$this->reminder->id)
                                ->where('text_id',$msgTxt->id)->count();

                // Message never sent
                if ($count == 0 ) {
                    $messageText = $msgTxt;
                    break;
                }

                if ($messageCount == -1 || $count < $messageCount) {
                    $messageCount = $count;
                    $messageText = $msgTxt;
                }
            }
        }

        return $messageText;
    }

    /**
     * Find a message, send SMS and save model
     */
    public function send()
    {
        $messageText = $this->findMessage();
        $this->text_id = $messageText->id;

        // Send message
        $client = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
        $client->messages->create(
            $this->reminder->user->phone,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => env('TWILIO_PHONE_NUMBER'),
                // the body of the text message you'd like to send
                'body' => $messageText->text
            )
        );

        return $this->save();
    }

    /**
     * Relationships
     */

    public function reminder()
    {
        return $this->belongsTo( 'App\Models\Reminder' );
    }

    public function text()
    {
        return $this->hasOne( 'App\Models\MessageText' );
    }
}
