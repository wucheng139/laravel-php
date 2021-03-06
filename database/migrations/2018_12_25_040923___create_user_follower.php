<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFollower extends Migration
{
    /**
     * Run the migrations.
     * 关注用户表
     * @return void
     */
    public function up()
    {
        Schema::create('user_follower', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('follower_id')->unsigned()->index();
            $table->integer('followed_id')->unsigned()->index();
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
        Schema::dropIfExists('user_follower');
    }
}
