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
        Schema::create('property_feature_property', function (Blueprint $table) {

            $table->unsignedBigInteger('property_feature_id');
            $table->unsignedBigInteger('property_id');

            // Define foreign key constraints
            $table->foreign('property_feature_id')->references('id')->on('property_features')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_property');
    }
};
