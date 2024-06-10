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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->foreignId('id_room')->references('id')->on('rooms')->cascadeOnDelete();
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->foreignId('id_room_tipe')->references('id')->on('room_tipes')->cascadeOnDelete();
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
