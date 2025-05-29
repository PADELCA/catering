<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function menus()
    {
        return $this->hasMany(menu::class);
    }

    public function subkategoris()
    {
        return $this->hasMany(subkategori::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
