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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('account_id')->nullable();
            $table->foreignId('cause_detail_id')->constrained('cause_details');
            $table->string('transaction_id')->nullable();
            $table->string('main_transaction_id')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('total_campaign')->nullable();
            $table->string('currency')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->longText('response_all')->nullable();
            $table->longText('receipt_url')->nullable();
            $table->longText('message')->nullable();
            $table->string('frequency')->nullable();
            $table->string('card_number')->nullable();
            $table->string('cvv')->nullable();
            $table->string('exp_month')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('future_payment_custId')->nullable();
            $table->string('payment_timezone')->nullable();
            $table->string('payment_time')->nullable();
            $table->string('gateway_name')->nullable();
            $table->string('upsell_campaignId')->nullable();
            $table->string('status')->default('Pendding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
