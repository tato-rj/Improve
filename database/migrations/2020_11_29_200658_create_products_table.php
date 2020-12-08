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

            $table->string('name_en');
            $table->string('headline_en');
            $table->text('description_en');

            $table->string('name_sq')->nullable();
            $table->string('headline_sq')->nullable();
            $table->text('description_sq')->nullable();

            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('discount')->nullable();

            $table->string('cover_path');

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
