<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageText extends Model
{
    public $table = 'messages_texts';

    public $fillable = [
        'reminder_id',
        'user_id',
        'date',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    public $casts = [
        'reminder_id' => 'integer',
        'user_id'     => 'integer',
        'date'        => 'date',
        'text'        => 'string'
    ];

    /**
     * Validation rules
     */
    public static function rules( $merge = [] )
    {
        return array_merge(
            [
                'reminder_id' => 'nullable|integer|exists:reminders,id',
                'user_id'     => 'nullable|integer|exists:users,id',
                'date'        => 'nullable|date',
                'text'        => 'required|string',
            ],
            $merge
        );
    }

    /**
     * Relationships
     */

    public function reminder()
    {
        return $this->belongsTo( 'App\Models\Reminder' );
    }

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }
}
