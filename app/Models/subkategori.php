<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subkategori extends Model
{
    //
        use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }


    public function menus()
    {
        return $this->hasMany(menu::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
