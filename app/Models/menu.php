<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'images',
        'price',
        'kategori_id', 
        'subkategori_id'
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
    ];

    public function kategori() {
        return $this->belongsTo(kategori::class);
    }

    public function subkategori(){
        return $this->belongsTo(subkategori::class);
    }

    public function orderitem() {
        return $this->hasMany(orderitem::class);
    }
}