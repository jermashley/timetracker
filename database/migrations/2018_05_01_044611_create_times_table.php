<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary()->index();
            $table->uuid('student');
            $table->foreign('student')->references('id')->on('users');
            $table->unsignedInteger('course');
            $table->foreign('course')->references('id')->on('courses');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->uuid('created_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->uuid('updated_by');
            $table->foreign('updated_by')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('times');
    }
}
