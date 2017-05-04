<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_image', function (Blueprint $table){
            $table->increments('id');
            $table->integer('research_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->string('name');
            $table->text('description');

            $table->foreign('research_id')
                ->references('id')
                ->on('research');

            $table->foreign('image_id')
                ->references('id')
                ->on('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_image');
    }
}
