<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reminder extends Model
{
    use SoftDeletes;

    const REC_DAILY = 'daily';
    const REC_WEEKLY = 'weekly';
    const REC_MONTHLY = 'monthly';


    const RECURRENCE = [
        self::REC_DAILY,
        self::REC_WEEKLY,
        self::REC_MONTHLY,
    ];

    public $table = 'reminders';

    public $fillable = [
        'user_id',
        'trigger_at',
        'recurrence',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    public $casts = [
        'user_id'    => 'integer',
        'trigger_at' => 'date',
        'recurrence' => 'string'
    ];

    /**
     * Find reminders due now
     *
     * @param $query
     *
     * @return mixed
     */
    public function scopeDue( $query )
    {
        // First we want all reminders that should be sent
        $now = Carbon::now();
        $inTwoMinutes = Carbon::now()->addMinutes( 2 );

        return $query->where( function ( $query ) use ( $now, $inTwoMinutes ) {
            /**
             * First, the one-off reminders
             */
            $query->where( 'recurrence', null );
            $query->where( 'trigger_at', '>=', $now );
            $query->where( 'trigger_at', '<=', $inTwoMinutes );
        } )->orWhere( function ( $query ) use ( $now, $inTwoMinutes ) {
            /**
             * Then, the daily reminders
             */
            $query->where( 'recurrence', self::REC_DAILY );
            $query->whereTime( 'trigger_at', '>=', $now->format('H:i:s') );
            $query->whereTime( 'trigger_at', '<=', $inTwoMinutes->format('H:i:s') );
        } );

        // TODO: Add support for monthly and weekly
    }

    /**
     * Relationships
     */

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function messages()
    {
        return $this->hasMany( 'App\Message' );
    }
}
