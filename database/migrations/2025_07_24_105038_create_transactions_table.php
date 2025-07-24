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
            $table->string('customer_name');
            $table->string('email');
            $table->string('last4', 4);
            $table->string('currency', 3);
            $table->decimal('amount', 10, 2);
            $table->enum('type', ['payment', 'refund', 'chargeback']);
            $table->enum('status', ['completed', 'pending', 'failed']);
            $table->datetime('transaction_date');
            $table->timestamps();
            
            // Indexes for common queries
            $table->index(['email']);
            $table->index(['type', 'status']);
            $table->index(['customer_name']);
            $table->index(['transaction_date']);
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
