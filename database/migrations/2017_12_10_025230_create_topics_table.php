<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**主题表
     * Run the migrations.
     * tinyInteger等同于数据库中的TINYINT。TINYINT型的字段如果不设置UNSIGNED类型,存储-128到127的整数。
     * 如果设置为UNSIGNED类型，只能存储从0到255的整数,不能用来储存负数。
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('标题');
            $table->text('description')->comment('摘要');
            $table->text('body')->comment('正文');
            $table->integer('user_id')->unsigned()->default(0)->index(); //unsigned属性只针对整型,表示数据项user_id恒为正整数
            $table->integer('nav_id')->unsigned()->default(0)->index();
            $table->integer('views')->unsigned()->default(0)->comment('浏览量');
            $table->integer('replies')->unsigned()->default(0)->comment('回复数');
            $table->integer('favorites')->unsigned()->default(0)->comment('收藏数');
            $table->integer('followers')->unsigned()->default(0)->comment('关注数');
            $table->integer('last_reply_user_id')->unsigned()->default(0)->comment('最后回复的用户ID');
            $table->tinyInteger('attribute')->default(1)->comment('属性 -1沉底;1正常;2推荐;3置顶');
            $table->tinyInteger('status')->default(1)->comment('状态 -1待审核;1已审核');
            $table->integer('order')->unsigned()->default(0)->comment('排序');


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
        Schema::dropIfExists('topics');
    }
}
