<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDepartament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_departaments', function (Blueprint $table) {
            $table->unsignedbigInteger('product_id');
            $table->unsignedbigInteger('departament_id');
            $table->foreign('product_id')->references('id')
            ->on('products') ->onDelete('cascade')  ;
            $table->foreign('departament_id')->references('id')->on('departaments')
            ->on('departaments') ->onDelete('cascade')  ; ;
            $table->primary(['product_id','departament_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_departaments');
    }
}
