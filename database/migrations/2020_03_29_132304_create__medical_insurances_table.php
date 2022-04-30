<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MedicalInsurance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_pin');
            $table->foreign('emp_pin')->references('emp_pin')->on('Employees');
            $table->integer('No_of_sibilings');
            $table->boolean('Spouse');
            $table->string('Card_status');
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
        Schema::dropIfExists('MedicalInsurance');
    }
}
