<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Variations extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->float('weight')->nullable();
            $table->integer('balance');
            $table->json('dimensions')->nullable();

            $table->foreign('product_id')->references('id')->on('products');
            
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variations');
    }
}
