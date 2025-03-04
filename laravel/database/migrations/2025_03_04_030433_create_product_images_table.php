<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_id');
            $table->string('url');
            $table->uuid('status');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
};
