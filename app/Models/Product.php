<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'client_id','name','notes'
    ];

    // relationships
    public function client()
    {
        return $this->hasOne(\App\Models\Client::class, 'id', 'client_id');
    }

    // helpers
    public static function getSelectbox()
    {
        return Product::orderBy('name')->get()->pluck('name', 'id');
    }

}