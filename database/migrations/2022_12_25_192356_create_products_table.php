<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->integer('catalog_id');
            $table->foreign('catalog_id')
                ->on('catalogs')
                ->references('id');
            $table->string('code')->nullable();
            $table->string('brand')->nullable();
            $table->string('series')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('specifications')->nullable();

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
