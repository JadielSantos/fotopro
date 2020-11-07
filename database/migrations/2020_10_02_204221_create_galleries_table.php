<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('galleries', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->integer('deadline');
      $table->string('image_size');
      $table->boolean('allow_copy');
      $table->string('use_water_mark');
      $table->boolean('allow_individual_comment');
      $table->boolean('allow_black_white');
      $table->boolean('is_public');
      $table->unsignedBigInteger('user_id');
      $table->string('password');
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('galleries');
  }
}
