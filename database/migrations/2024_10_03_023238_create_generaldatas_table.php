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
        Schema::create('generaldatas', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('generalimages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('link');
            $table->boolean('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generaldatas');
        Schema::dropIfExists('generalimages');
    }
};
