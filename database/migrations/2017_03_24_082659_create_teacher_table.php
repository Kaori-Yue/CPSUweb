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
            $table->string('doctor_degree');
            $table->string('master_degree');
            $table->string('bachelor_degree');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('position');
            $table->string('expertise');
            $table->integer('image');
            $table->string('token');
            $table->string('password');
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
