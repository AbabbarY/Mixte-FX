<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class command extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id","product_name","prix",
        "quantite","size","paid","dilivred","total"
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
