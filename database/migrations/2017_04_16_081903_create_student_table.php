<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('major');
            $table->string('degree');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token');
            $table->integer('image');
            $table->integer('user_id')->nullable();
            $table->enum('status', [
                'enable',
                'disable',
                'pause'
            ]);
            $table->dateTime('valid_until');
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
        Schema::dropIfExists('student');
    }
}
