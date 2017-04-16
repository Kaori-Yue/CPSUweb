<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesisOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thesis_owner', function (Blueprint $table){
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('thesis_id')->unsigned();

            $table->foreign('student_id')
                ->references('id')
                ->on('student');

            $table->foreign('thesis_id')
                ->references('id')
                ->on('thesis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thesis_owner');
    }
}
