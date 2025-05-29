<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->text('description');
            $table->json('images')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('kategori_id');
            $table->string('subkategori_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
