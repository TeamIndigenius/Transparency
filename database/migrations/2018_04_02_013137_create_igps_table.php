<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igps', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('membership_id');
            $table->integer('doc_id');
            $table->string('title', 50);
            $table->float('price', 5, 2);
            $table->string('content');
            $table->timestamps();
            $table->boolean('is_public');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('igps');
    }
}
