<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeleavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeleave', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reason')->nullable();
            $table->integer('days_taken');
            $table->integer('default_days')->default(30);
            $table->integer('emp_pin');
            $table->foreign('emp_pin')->references('emp_pin')->on('Employees')->unsigned();
            $table->bigInteger('depart_id')->unsigned()->index();
            $table->foreign('depart_id')->references('id')->on('Department')->unsigned();
            $table->bigInteger('division_id')->unsigned()->index();
            $table->foreign('division_id')->references('id')->on('depart-divisions')->unsigned();
            $table->boolean('status')->nullable();
            $table->string('position')->nullable();
            $table->string('approval_by_supervisior')->nullable();
            $table->string('approval_by_HOD')->nullable();
            $table->string('approval_by_DDHR')->nullable();
            $table->date('Starting_date');
            $table->date('ending_date');
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
        Schema::dropIfExists('employee_leave');
    }
}
