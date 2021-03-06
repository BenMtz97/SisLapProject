<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            //Table Fields
            $table->unsignedInteger('ticket_id')->autoIncrement();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('equipment_id');
            $table->string('comment',150);
            $table->boolean('status'); //0 Open - 1 On revision - 2 Closed
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
        //
    }
}
