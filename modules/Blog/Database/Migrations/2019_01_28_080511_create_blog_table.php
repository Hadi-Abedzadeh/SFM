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

        Schema::create('blg_posts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->string('title');
                $table->text('body');
                $table->string('imageUrl');
                $table->string('slug')->unique();
                $table->boolean('active')->default(1);
                $table->timestamps();
        });

        Schema::create('blg_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('client_email');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('blg_posts')->onDelete('cascade');
            $table->string('body');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });


        Schema::create('blg_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('category_post', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['post_id' , 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blg_posts');
        Schema::dropIfExists('blg_comments');
        Schema::dropIfExists('blg_categories');
        Schema::dropIfExists('category_post');
    }
}
