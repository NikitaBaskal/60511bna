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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained('showtimes')->onDelete('cascade'); // Ссылка на сеанс
            $table->foreignId('seat_id')->constrained('seats')->onDelete('cascade'); // Ссылка на место
            $table->string('customer_name'); // Имя клиента
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
