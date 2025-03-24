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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hall_id')->constrained('halls')->onDelete('cascade'); // Внешний ключ на hall
            $table->integer('row_number'); // Номер ряда
            $table->integer('seat_number'); // Номер места
            $table->string('price_category', 50); // Ценовая категория
            $table->timestamps();
            $table->unique(['hall_id', 'row_number', 'seat_number']); // Уникальность места в зале

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
