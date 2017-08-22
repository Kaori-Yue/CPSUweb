<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content')->nullable();
            $table->integer('cover');
            $table->enum('status', ['draft', 'disable', 'publish']);
            $table->dateTime('publish_at');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('featured')->default(false);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('category');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
