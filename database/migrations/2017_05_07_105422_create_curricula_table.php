<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('degree');
            $table->string('name_th');
            $table->string('name_en');
            $table->string('degree_name_th');
            $table->string('degree_name_en');
            $table->integer('cost');
            $table->integer('credit');
            $table->text('enrollment_criteria')->nullable();
            $table->text('graduation_criteria')->nullable();
            $table->text('entrance_subject')->nullable();
            $table->text('document')->nullable();
            $table->string('status');
            $table->integer('file');
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
        Schema::dropIfExists('curricula');
    }
}
