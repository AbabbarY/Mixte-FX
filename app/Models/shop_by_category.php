<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop_by_category extends Model
{
    use HasFactory;

    protected $table = 'shop_by_category';

    protected $fillable = [
        "title","slug","description",
        "image","prix","old-prix","quantité",
        "type"
    ];

    
}
