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
            $table->boolean('bundle_status')->default(0)->after('logo');
            $table->string('impactAmount1')->nullable();
            $table->string('impactAmount2')->nullable();
            $table->string('impactAmount3')->nullable();
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
            $table->dropColumn(['bundle_status', 'impactAmount1', 'impactAmount2', 'impactAmount3', 'impactDesc1', 'impactDesc2', 'impactDesc3']);
        });
    }
};
