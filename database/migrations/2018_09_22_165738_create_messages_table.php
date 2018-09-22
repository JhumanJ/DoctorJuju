<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'messages', function ( Blueprint $table ) {
            $table->increments( 'id' );

            $table->bigInteger( 'reminder_id' );
            $table->bigInteger( 'text_id' );

            $table->foreign( 'reminder_id' )->references( 'id' )->on( 'reminders' );
            $table->foreign( 'text_id' )->references( 'id' )->on( 'messages_texts' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'messages' );
    }
}
