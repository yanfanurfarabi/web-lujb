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
        Schema::create('generaldata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('value');
            $table->timestamps();
        });

        Schema::create('generalimage', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->boolean('isActive');
            $table->timestamps();
        });

        Schema::create('client', function (Blueprint $table) {
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
        Schema::dropIfExists('generaldata');
        Schema::dropIfExists('generalimage');
    }
};
