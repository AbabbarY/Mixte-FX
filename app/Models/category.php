<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class category extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function Produit(){
        return $this->hasMany(Produits::class);
    }

    public function Product_refe(){
        return $this->belongsTo(Produits::class);
    }
}
