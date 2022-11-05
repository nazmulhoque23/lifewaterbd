<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->mediumText('image');
            $table->string('summary')->nullable();
            $table->string('origin')->nullable();
            $table->string('membrane')->nullable();
            $table->string('capacity')->nullable();
            $table->string('dimension')->nullable();
            $table->string('technology');
            $table->string('separation')->nullable();
            $table->string('benefits')->nullable();
            $table->string('warranty');
            //relation to subcategory, 
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            //relation to brand
            //$table->brand_id
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('products');
    }
}
