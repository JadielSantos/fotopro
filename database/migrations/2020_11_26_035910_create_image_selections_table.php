<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_selections', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('gallery_image_id');
          $table->unsignedBigInteger('selection_id');
          $table->timestamps();

          $table->foreign('gallery_image_id')->references('id')->on('gallery_images');
          $table->foreign('selection_id')->references('id')->on('selections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_selections');
    }
}
