<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentSoftware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_software', function (Blueprint $table) {
            //Table Fields
            $table->unsignedInteger('equipment_software_id')->autoIncrement();
            $table->unsignedInteger('equipment_id');
            $table->unsignedInteger('software_id');

            // Foreign Keys
            $table->unique(['equipment_id', 'software_id']);
            $table->foreign('software_id')->references('software_id')->on('cat_software')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('equipment_id')->references('equipment_id')->on('equipment')
                ->onDelete('cascade')->onUpdate('cascade');
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
