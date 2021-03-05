<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->unsignedBigInteger('id_category');
            $table->string('tx_name')->unique();
            $table->string('tx_url')->unique();
            $table->double('vl_price', 10, 2);
            $table->text('tx_description')->nullable();
            $table->timestamps();

            $table->foreign('id_category')
                ->references('id_category')
                ->on('categories')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
