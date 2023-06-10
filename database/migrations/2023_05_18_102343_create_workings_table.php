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
        Schema::create('workings', function (Blueprint $table) {
            $table->id();
            $table->string('monday1');
            $table->string('monday2');
            $table->string('tuesday1');
            $table->string('tuesday2');
            $table->string('wednesday1');
            $table->string('wednesday2');
            $table->string('thursday1');
            $table->string('thursday2');
            $table->string('friday1');
            $table->string('friday2');
            $table->string('saturday1');
            $table->string('saturday2');
            $table->string('sunday1');
            $table->string('sunday2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workings');
    }
};
