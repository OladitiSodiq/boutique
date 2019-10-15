<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // if (!Schema::hasTable('product')) {
    Schema::create('product', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->nullable();
      $table->string('slug')->nullable();
      $table->string('full_price')->nullable();
      $table->string('discounted_price')->nullable();
      $table->string('quantity')->nullable();
      $table->string('short_desc')->nullable();
      $table->string('full_desc')->nullable();
      $table->string('material')->nullable();
      $table->string('styles')->nullable();
      $table->string('views')->nullable();
      $table->string('properties')->nullable();
      $table->string('brand')->nullable();
      $table->string('status')->nullable();
      $table->string('image')->nullable();
      $table->string('created_by')->nullable();
      $table->string('last_modified_by')->nullable();
      $table->timestamps();
    });
    // }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }
}
