<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategoriproduk_id');
            $table->string('namaproduk');
            $table->bigInteger('hargaproduk');
            $table->integer('stokproduk');
            $table->text('deskripsiproduk');
            $table->string('gambarproduk1');
            $table->string('gambarproduk2')->nullable();
            $table->string('gambarproduk3')->nullable();
            $table->string('gambarproduk4')->nullable();
            $table->timestamps();

            $table->foreign('kategoriproduk_id')->references('id')->on('kategoriproduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
