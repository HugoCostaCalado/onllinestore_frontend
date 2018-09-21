<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {

            $table->increments('id');

            $table->decimal('totalprice')->default(0);

            $table->unsignedInteger('user_id');

            $table->foreign('user_id')

                ->references('id')

                ->on('users');

            $table->unsignedInteger('package_states_id');

            $table->foreign('package_states_id')

                ->references('id')

                ->on('package_states');


            //$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
