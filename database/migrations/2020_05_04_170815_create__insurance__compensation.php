<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceCompensation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('InsuranceCompensation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('DateofIncident');
            $table->string('ReasonofClaim');
            $table->string('LocationofIncident');
            $table->date('DateofCompensation');
            $table->integer('emp_pin');
            $table->foreign('emp_pin')->references('emp_pin')->on('Employees');
            $table->string('createdby')->nullable();
            $table->string('updatedby')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('InsuranceCompensation');
    }
}
