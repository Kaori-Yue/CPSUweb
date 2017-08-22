<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_th');
            $table->string('name_en');
            $table->string('doctor_degree')->nullable();
            $table->string('master_degree')->nullable();
            $table->string('bachelor_degree')->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('position')->nullable();
            $table->string('expertise')->nullable();
            $table->integer('rank')->default(0);
            $table->integer('image');
            $table->string('token');
            $table->string('password');
            $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->enum('status', [
                'duty',     // ปฏิบัติงาน
                'retire',   // เกษียณ
                'disable',  // ลาออก
                'study'     // ลาศึกษาต่อ
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
