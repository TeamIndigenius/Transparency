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
            $table->increments('id')->unique();
            $table->string('student_number', 9)->unique();
            $table->string('username', 30)->unique();
            $table->string('password');
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->string('current_add', 100);
            $table->string('contact_number', 30);
            $table->string('email_add',50)->unique();
            $table->string('course');
            $table->enum('year_level', ['1', '2', '3', '4', 'n']);
            $table->boolean('is_public');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
