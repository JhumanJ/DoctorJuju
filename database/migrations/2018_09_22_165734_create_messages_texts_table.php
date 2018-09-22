<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('reminder_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('date')->nullable();
            $table->text('text');

            $table->foreign('reminder_id')->references('id')->on('reminders');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages_texts');
    }
}
