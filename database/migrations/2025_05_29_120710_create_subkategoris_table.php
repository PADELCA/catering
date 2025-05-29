<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subkategoris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('kategori_id')
                  ->constrained('kategoris') // pastikan tabel subkategoris sudah ada
                  ->onDelete('cascade');        // jika subkategori dihapus, kategori ikut terhapus
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subkategoris');
    }
};
