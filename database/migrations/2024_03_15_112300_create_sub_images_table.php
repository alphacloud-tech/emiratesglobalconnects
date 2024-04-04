<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_images', function (Blueprint $table) {
            $table->id();

            $table->string('image_url');

            // $table->unsignedBigInteger('blog_post_id'); // Use unsignedBigInteger to match an unsigned integer
            // $table->foreign('blog_post_id')->references('id')->on('blog_posts')->onDelete('cascade');

            $table->unsignedBigInteger('service_id'); // Use unsignedBigInteger to match an unsigned integer
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->unsignedBigInteger('property_id'); // Use unsignedBigInteger to match an unsigned integer
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');


            $table->boolean('active')->default(false);

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
        Schema::dropIfExists('sub_images');
    }
};
