<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contacts', function (Blueprint $table) {
      // id
      $table->bigIncrements('id')->comment("ID");
      // 名前
      $table->string("name", 20)->comment("名前");
      // メールアドレス
      $table->string("email", 255)->comment("メールアドレス");
      // お問い合わせ内容
      $table->text("contact", 65535)->comment("お問い合わせ内容");
      // タイムスタンプ
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
    Schema::dropIfExists('contacts');
  }
}
