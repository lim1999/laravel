<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('rent_price')->nullable();
            $table->string('list_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('sole_price')->nullable();
            $table->string('profile')->nullable();
            $table->string('galleries')->nullable();
            $table->string('create_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('create_at')->nullable();
            $table->string('updated_at')->nullable();
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
