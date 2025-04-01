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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->required();
            $table->string('name')->required();
            $table->string('short_name')->required();
            $table->string('sku')->required();
            $table->double('price')->required();
            $table->double('discount')->default(0);
            $table->string('tag')->nullable();
            $table->text('description')->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('status')->default(0);
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
