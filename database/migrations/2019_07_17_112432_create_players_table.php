<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');   // 出場者ID
            $table->string('name');     // 出場者名
            $table->string('furigana');     // フリガナ
            $table->string('sex');     // 性別
            $table->date('birthdate');     // 生年月日
            $table->string('email');     // メールアドレス ok
            // integerは文字数指定できない　stringは文字数指定できる！
            $table->integer('code');     // 郵便番号
            $table->string('address');     // 住所
            $table->integer('phone_num');     // 電話番号
            // NULLを許容
            $table->integer('history')->nullable();     // 武術歴
            $table->string('teacher')->nullable();     // 老師
            $table->string('team')->nullable();     // 所属チーム
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
        Schema::dropIfExists('players');
    }
}
