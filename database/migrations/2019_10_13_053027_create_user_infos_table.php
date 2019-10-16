<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('msisdn');
            $table->integer('age');
            $table->string('gender');
            $table->integer('status');
            $table->string('device');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
