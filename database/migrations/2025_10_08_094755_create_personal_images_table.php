<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('personal_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personals');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('media');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_images');
    }
};
