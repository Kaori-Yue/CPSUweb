<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table){
            $table->increments('id');
            $table->integer('file')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('owner');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('research_user', function (Blueprint $table){
            $table->increments('id');
            $table->integer('research_id');
            $table->integer('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research');
        Schema::dropIfExists('research_user');
    }
}
