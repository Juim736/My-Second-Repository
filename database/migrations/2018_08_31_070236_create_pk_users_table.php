<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pk_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('mobile')->unique();
            $table->string('union');
            $table->string('blood');
            $table->string('occupation')->nullable();
            $table->string('marital_status')->nullable();
            $table->dateTime('lastGivingBlood')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('presentZone')->nullable();
            $table->integer('user_type')->default(0);
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
        Schema::dropIfExists('pk_users');
    }
}
