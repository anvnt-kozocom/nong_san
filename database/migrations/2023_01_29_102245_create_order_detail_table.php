<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('order_detail', function (Blueprint $table) {
      $table->unsignedBigInteger('order_id');
      $table->unsignedBigInteger('product_id');
      $table->integer('quantity');
      $table->double('price');
      $table->unsignedInteger('sale');
      $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();
      $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
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
    Schema::dropIfExists('order_detail');
  }
};