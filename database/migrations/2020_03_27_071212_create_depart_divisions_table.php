<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depart-divisions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Divisionname')->nullable();
            $table->string('Position');
            $table->string('Sub-Position')->nullable();
            $table->bigInteger('Department_id')->unsigned()->index();
            $table->foreign('Department_id')->references('id')->on('Department');
            $table->string('createdby')->nullable();
            $table->string('updatedby')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::drop('depart-divisions');
    DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
       
    }
}
