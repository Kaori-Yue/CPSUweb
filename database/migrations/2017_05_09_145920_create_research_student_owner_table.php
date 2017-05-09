<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchStudentOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_student_owner', function (Blueprint $table){
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('research_id')->unsigned();

            $table->foreign('student_id')
                ->references('id')
                ->on('student');

            $table->foreign('research_id')
                ->references('id')
                ->on('research');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_student_owner');
    }
}
