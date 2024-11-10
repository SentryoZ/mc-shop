<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable()->constrained('orders');
            $table->foreignID('user_id')->nullable()->constrained('users');
            $table->string('transaction_id');
            $table->string('provider_type');
            $table->decimal('amount', 10, 2);
            $table->string('customer_id');
            $table->string('customer_email');
            $table->string('customer_name');
            $table->string('payment_status');
            $table->integer('status')->unsigned();
            $table->string('partner_name');
            $table->text('memo');
            $table->softDeletes();
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
