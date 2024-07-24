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
        Schema::create('ledgers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained();
            $table->foreignId('lend_request_id')->constrained();
            $table->foreignId('remit_request_id')->nullable()->constrained();
            $table->decimal('interest_rate', 5, 2);
            $table->decimal('amount', 10, 2);
            $table->decimal('interest_amount', 10, 2)->default(0.00);
            $table->decimal('balance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ledgers');
    }
};
