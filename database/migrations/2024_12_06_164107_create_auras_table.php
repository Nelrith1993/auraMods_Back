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
        Schema::create('auras', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('description')->max(2000);
            $table->string('image_uri', 255)->nullable();
            $table->string('content_uri', 255);
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auras');
    }
};
