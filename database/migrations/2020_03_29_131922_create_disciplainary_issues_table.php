<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplainaryIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Disciplainary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_pin');
            $table->bigInteger('status_id')->unsigned()->index();
            $table->foreign('emp_pin')->references('emp_pin')->on('Employees');
            $table->foreign('status_id')->references('id')->on('Disciplainarystatus');
            $table->integer('NumberReceived');
            $table->date('suspensionstartdate')->nullable();
            $table->date('suspensionenddate')->nullable();
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
        Schema::dropIfExists('Disciplainary');
    }
}
