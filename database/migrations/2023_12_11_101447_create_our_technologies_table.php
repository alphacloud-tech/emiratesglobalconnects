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
        Schema::create('our_technologies', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('image_url_light')->nullable();
            $table->string('image_url_light')->nullable();

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
        Schema::dropIfExists('our_technologies');
    }
};
