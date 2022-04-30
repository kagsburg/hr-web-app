<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Employees', function (Blueprint $table) {
             $table->bigInteger('Department_id')->unsigned()->index();
             $table->foreign('Department_id')->references('id')->on('Department');
             $table->bigInteger('Division_id')->unsigned()->index();
             $table->foreign('Division_id')->references('id')->on('depart-divisions');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Employees', function (Blueprint $table) {
            //
        });
    }
}
