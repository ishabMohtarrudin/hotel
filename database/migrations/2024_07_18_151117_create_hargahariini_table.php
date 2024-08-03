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
        Schema::create('hargahariini', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hotel');
            $table->integer('harga');
            $table->integer('available_room');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_kamar');
            $table->timestamps();
            
            // Optional: Add foreign key constraints
            // $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
            // $table->foreign('id_kamar')->references('id')->on('kamar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hargahariini');
    }
};
