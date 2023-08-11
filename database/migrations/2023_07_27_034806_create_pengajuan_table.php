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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembimbing_id');
            $table->unsignedBigInteger('humas_id');
            $table->unsignedBigInteger('peserta_id');
            $table->unsignedBigInteger('dudi_id');
            $table->string('disetujui_oleh');
            $table->timestamps();
            $table->foreign('pembimbing_id')->references('id')->on('pembimbing')->onDelete('cascade');           
            $table->foreign('humas_id')->references('id')->on('humas')->onDelete('cascade');           
            $table->foreign('dudi_id')->references('id')->on('dudi')->onDelete('cascade');
            $table->foreign('peserta_id')->references('id')->on('peserta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
