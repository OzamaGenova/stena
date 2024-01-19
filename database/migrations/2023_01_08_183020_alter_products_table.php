<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('consumption')->nullable();
            $table->string('drying_time')->nullable();
            $table->string('applying')->nullable();
            $table->string('volume')->nullable();
            $table->string('possible_volume')->nullable();
            $table->string('fire_resistance')->nullable();
            $table->string('colored')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        throw new Exception('NOT CODE');
    }
}
