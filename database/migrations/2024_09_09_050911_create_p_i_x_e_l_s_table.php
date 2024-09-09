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
        Schema::create('p_i_x_e_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('pixel_id')->nullable();
            $table->string('access_token')->nullable();
            $table->string('token_event')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_i_x_e_l_s');
    }
};
