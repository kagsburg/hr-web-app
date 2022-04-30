<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {
            $table->integer('emp_pin');
            $table->primary('emp_pin');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('CurrentAddress');
            $table->string('Gender');
            $table->date('DateofJoining');
            $table->date('DateofBirth');
            $table->string('MartialStatus');
            $table->string('LevelofEducation');
            // 
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
        Schema::dropIfExists('Employees');
    }
}
