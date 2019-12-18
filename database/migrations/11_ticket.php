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
            $table->bigIncrements('ticket_id')->primary();
            $table->integer('user_id');
            $table->integer('equipment_id');
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
