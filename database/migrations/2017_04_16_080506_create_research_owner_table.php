<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_owner', function (Blueprint $table){
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('research_id')->unsigned();

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teacher');

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
        Schema::dropIfExists('research_owner');
    }
}
