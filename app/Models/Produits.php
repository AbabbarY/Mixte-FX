<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    
    protected $fillable = [
        "title","slug","description",
        "image","prix","old-prix","quantité",
        "category_id","type","offres"
    ];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function Category_refe(){
        return $this->hasMany(category::class);
    }

    public function favorite(){
        return $this->hasMany(favorite::class);
    }

 
}
