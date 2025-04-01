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
            $table->string('code')->required();
            $table->integer('user_id')->required();
            $table->double('amount_before_discount')->required();
            $table->double('amount_after_discount')->required();
            $table->double('discount_amount')->required();
            $table->string('status')->default('pending');
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->required();
            $table->integer('product_id')->required();
            $table->string('product_name')->required();
            $table->integer('variant_id')->required();
            $table->string('variant_name')->required();
            $table->integer('quantity')->required();
            $table->double('amount')->required();
            $table->double('discount')->required();
            $table->string('image')->required();
            $table->timestamps();
            $table->softDeletes();
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
