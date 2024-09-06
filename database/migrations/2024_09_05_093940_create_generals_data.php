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
        Schema::create('generals_data', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('value');
            $table->boolean('isActive');
            $table->timestamps();
        });

        Schema::create('generals_image', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->boolean('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals_data');
        Schema::dropIfExists('generals_image');
    }
};
