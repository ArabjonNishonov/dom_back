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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->text('body')->nullable();
            $table->unsignedInteger('count_rooms')->default(0);
            $table->string('total_area')->nullable();
            $table->string('live_area')->nullable();
            $table->enum('type', ['rent', 'sale'])->default('sale');
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('maps')->nullable();
            $table->boolean('status')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->boolean('is_premium')->default(0);
            $table->boolean('furnished')->default(0);
            $table->dateTime('premium_date')->nullable();
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
