<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            //Table Fields
            $table->bigIncrements('equipment_id')->primary();
            $table->string('name',50);
            $table->integer('brand_id');
            $table->string('model',50);
            $table->string('serial_number', 50);
            $table->string('mac_address',17);
            $table->integer('os_id');
            $table->integer('build_id');
            $table->integer('status')->default(1); //0 Unavailable - 1 Available - 2 On Maintenance
            $table->timestamps();

            // Foreign Keys
            $table->foreign('brand_id')->references('brand_id')->on('cat_brand');
            $table->foreign('os_id')->references('os_id')->on('cat_os');
            $table->foreign('build_id')->references('build_id')->on('cat_build');
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
