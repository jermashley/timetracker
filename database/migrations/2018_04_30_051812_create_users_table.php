<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary()->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique()->index();
            $table->string('email')->unique();
            $table->string('password');
            $table->uuid('pod')->nullable();
            $table->foreign('pod')->references('id')->on('pods');
            $table->boolean('is_parent')->nullable();
            $table->boolean('is_child')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
