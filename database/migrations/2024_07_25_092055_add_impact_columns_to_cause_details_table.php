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
        Schema::table('cause_details', function (Blueprint $table) {
            $table->decimal('impactAmount1', 8, 2)->nullable();
            $table->decimal('impactAmount2', 8, 2)->nullable();
            $table->decimal('impactAmount3', 8, 2)->nullable();
            $table->string('impactDesc1')->nullable();
            $table->string('impactDesc2')->nullable();
            $table->string('impactDesc3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cause_details', function (Blueprint $table) {
            $table->dropColumn(['impactAmount1', 'impactAmount2', 'impactAmount3', 'impactDesc1', 'impactDesc2', 'impactDesc3']);
        });
    }
};
