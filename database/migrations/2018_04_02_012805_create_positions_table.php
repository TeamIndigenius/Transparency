<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->enum('position', ['Governor','President', 'VP Internal', 'VP External', 'Secretary','Assistant Secretary', 'Treasurer', 'P.R.O.','Execom','Member', 'Adviser', 'Co-Adviser']);
            $table->boolean('is_execom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
