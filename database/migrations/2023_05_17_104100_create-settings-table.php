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
        schema::create('settings', function (blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
