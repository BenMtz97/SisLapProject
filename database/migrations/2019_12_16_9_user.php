<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            //Table Fields
            $table->unsignedInteger('user_id')->autoIncrement();
            $table->string('name',50);
            $table->string('first_last_name',50);
            $table->string('second_last_name',50)->nullable();
            $table->unsignedInteger('modality_id');
            $table->unsignedInteger('type_id');
            $table->string('group',2);
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('position_id');
            $table->string('password',60);
            $table->boolean('status')->default(true); //false Inactive - true Active
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('modality_id')->references('modality_id')->on('cat_modality');
            $table->foreign('type_id')->references('type_id')->on('cat_type');
            $table->foreign('career_id')->references('career_id')->on('cat_career');
            $table->foreign('position_id')->references('position_id')->on('cat_position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('users');
    }
}
