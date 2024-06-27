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
        Schema::create('cause_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('users')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();

            $table->string('photo')->nullable();

            $table->longText('short_details')->nullable();

            $table->integer('goal')->nullable();

            $table->longText('page_content')->nullable();

            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('cause_details');
    }
};
