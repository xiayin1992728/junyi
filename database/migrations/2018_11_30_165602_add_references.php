<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('channels', function (Blueprint $table) {

            // 当 user_id 对应的 users 表数据被删除时，删除词条
            $table->foreign('uid')->references('id')->on('admins')->onDelete('cascade');
        });

        Schema::table('spreads', function (Blueprint $table) {

            // 当 user_id 对应的 users 表数据被删除时，删除此条数据
            $table->foreign('cid')->references('id')->on('channels')->onDelete('cascade');

            // 当 topic_id 对应的 topics 表数据被删除时，删除此条数据
            $table->foreign('pid')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::table('count_peoples', function (Blueprint $table) {

            // 当 user_id 对应的 users 表数据被删除时，删除此条数据
            $table->foreign('sid')->references('id')->on('spreads')->onDelete('cascade');

            // 当 topic_id 对应的 topics 表数据被删除时，删除此条数据
            $table->foreign('uid')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('channels', function (Blueprint $table) {
        //     // 移除外键约束
        //     $table->dropForeign(['uid']);
        // });

        // Schema::table('spreads', function (Blueprint $table) {

        //      $table->dropForeign(['cid']);
        //      $table->dropForeign(['pid']);
        // });

        // Schema::table('count_peoples', function (Blueprint $table) {

        //      $table->dropForeign(['id']);
        //      $table->dropForeign(['pid']);
        // });
    }
}
