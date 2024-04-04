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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('map')->nullable();
            $table->string('image_url')->nullable();
            $table->string('category')->nullable();
            $table->string('price')->nullable();
            $table->boolean('is_feature')->default(false);
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
        Schema::dropIfExists('properties');
    }
};
