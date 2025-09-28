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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade'); // seller
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            // $table->foreignId('category_id')->constrained()->onDelete('cascade'); // category
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('old_price', 8, 2);
            $table->decimal('cost', 8, 2);
            $table->boolean('is_visible')->default(true);
            $table->string('sku')->unique();
            $table->string('barcode')->unique();
            $table->integer('qty')->default(0);
            $table->integer('security_stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};