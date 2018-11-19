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
            $table->char('phone',11)->comment('手机')->unique();
            $table->char('name','10')->nullable()->comment('姓名');
            $table->string('password',60)->nullable()->comment('密码');
            $table->char('idcard',18)->nullable()->comment('身份证');
            $table->char('credit',5)->nullable()->comment('芝麻分');
            $table->char('qq',15)->nullable()->comment('qq号码');
            $table->char('weixin',18)->nullable()->comment('微信号');
            $table->tinyInteger('work')->nullable()->comment('是否有工作 0没有 1有')->default(0);
            $table->tinyInteger('house')->nullable()->comment('是否有房产 0没有 1有')->default(0);
            $table->tinyInteger('card')->nullable()->comment('是否有车产 0没有 1有')->default(0);
            $table->tinyInteger('accumulation')->nullable()->comment('是否有公积金 0没有 1有')->default(0);
            $table->tinyInteger('insurance')->nullable()->comment('是否有社保 0没有 1有')->default(0);
            $table->rememberToken()->comment('记住我');
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
