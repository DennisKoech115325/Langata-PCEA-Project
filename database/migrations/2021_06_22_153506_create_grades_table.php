<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('entry_number');
            $table->bigInteger('student_id');
            $table->integer('math');
            $table->integer('english');
            $table->integer('swahili');
            $table->integer('science');
            $table->integer('sst_cre');
            $table->integer('total');
            $table->integer('position');
            $table->integer('class');
            $table->integer('term');
            $table->integer('year');
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
        Schema::dropIfExists('grades');
    }
}
