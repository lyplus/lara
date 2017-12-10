<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->nullable()->comment('头像');
            $table->tinyInteger('gender')->nullable()->comment('性别: 1男，2女，3保密');
            $table->string('bio')->nullable()->comment('个人简介');
            $table->string('medal')->nullable()->comment('勋章、头衔');
            $table->string('level')->nullable()->comment('等级');
            $table->integer('score')->default(0)->comment('积分');
            $table->tinyInteger('status')->default(2);          //用户状态 -1小黑屋;1待审核;2已审核
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
