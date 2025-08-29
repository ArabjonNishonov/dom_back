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
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->unsignedInteger('rooms')->default(1);
            $table->string('title');
            $table->string('slug');
            $table->text('body')->nullable();
            $table->unsignedInteger('count_rooms')->default(0);
            $table->string('total_area')->nullable();
            $table->string('live_area')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedInteger('building_floor')->default(0);
            $table->unsignedInteger('floor')->default(0);
            $table->string('maps')->nullable();
            $table->enum('remont_type', ['euro', 'rus', 'islamic'])->default('euro');
            $table->boolean('status')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->boolean('is_premium')->default(0);
            $table->boolean('is_furnished')->default(0);
            $table->dateTime('premium_date')->nullable();
            $table->boolean('is_have_lift')->default(0);
            $table->boolean('is_heating')->default(0);
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
