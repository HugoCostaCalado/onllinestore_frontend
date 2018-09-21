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

            $table->unsignedInteger('cat_id');

            $table->foreign('cat_id')
                ->references('id')
                ->on('categories');

            $table->string('name');

            $table->string('imagepath');

            $table->text('description');

            $table->decimal('price',8,2);

            $table->integer('stock');

            $table->timestamps();
        });

        Schema::create('package_product', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('packages_id');

            $table->foreign('packages_id')
                ->references('id')
                ->on('packages');

            $table->unsignedInteger('products_id');

            $table->foreign('products_id')
                ->references('id')
                ->on('products');
                
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
        
        Schema::dropIfExists('package_product');
    }
}
