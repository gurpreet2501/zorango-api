<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTankAuthUsersAutoLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tank_auth_users_auto_login', function (Blueprint $table) {
        //     $table->increments('key_id');
        //     $table->integer('user_id');
        //     $table->string('user_agent',255);
        //     $table->string('last_ip',40);
        //     $table->dateTime('last_login');
        //     $table->timestamps();
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
