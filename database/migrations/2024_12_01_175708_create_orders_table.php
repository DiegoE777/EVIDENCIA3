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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->string('customer_name');
            $table->string('customer_number')->unique();
            $table->text('fiscal_data');
            $table->string('delivery_address');
            $table->text('notes')->nullable();
            $table->foreignId('status_id')->constrained('statuses');
            $table->timestamps();
            $table->softDeletes(); // Para eliminación lógica
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
