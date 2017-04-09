<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTankAuthUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tank_auth_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',255);
            $table->string('password',255);
            $table->string('email',255);
            $table->boolean('activated');
            $table->boolean('banned');
            $table->string('ban_reason',255);
            $table->string('new_password_key',50);
            $table->string('new_email',100);
            $table->string('new_email_key',50);
            $table->string('last_ip',40);
            $table->dateTime('last_login');
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
