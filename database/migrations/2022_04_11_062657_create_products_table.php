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
            $table->string('title')->unique();
            $table->longText('description');
            $table->string('type');
            $table->decimal('amount', $precision = 8, $scale = 2)->unsigned()->nullable();
            $table->integer('stock')->unsigned()->nullable();
            $table->boolean('visible')->default(false);
            $table->boolean('locked')->default(false);
            $table->string('slug');
            $table->bigInteger('id_account')->unsigned();
            $table->timestamps();

            $table->foreign('id_account')->references('id')->on('users');
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
