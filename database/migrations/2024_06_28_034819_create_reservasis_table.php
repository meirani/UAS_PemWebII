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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('tamu');
            $table->foreignId('hotel_id')->constrained(
                table: 'hotels',
                indexName: 'reservasi_hotel_id'
            );
            $table->foreignId('kamar_id')->constrained(
                table: 'kamars',
                indexName: 'reservasi_kamar_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'reservasi_user_id'
            );
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
