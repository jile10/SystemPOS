<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigned();
            $table->integer('system_id')->unsigned();
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systems_modules');
    }
}
