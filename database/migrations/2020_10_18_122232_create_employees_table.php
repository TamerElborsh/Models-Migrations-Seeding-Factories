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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OfficeCode');
            $table->unsignedBigInteger('ReportCode');
            $table->string('LastName');
            $table->string('FirestName');
            $table->string('Extension');
            $table->string('Email');
            $table->string('JopTitle');

            $table->foreign('OfficeCode')->references('id')->on('offices');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
