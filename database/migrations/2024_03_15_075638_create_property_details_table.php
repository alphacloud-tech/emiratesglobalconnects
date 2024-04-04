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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('property_id'); // Use unsignedBigInteger to match an unsigned integer

            $table->string('property_area');
            $table->string('lot_area');

            $table->string('home_area');
            $table->string('lot_dimensions');

            $table->integer('rooms');
            $table->integer('beds');

            $table->integer('baths');
            $table->decimal('price', 10, 2);

            $table->year('year_built');
            $table->boolean('active')->default(false);

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');


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
        Schema::dropIfExists('property_details');
    }
};
