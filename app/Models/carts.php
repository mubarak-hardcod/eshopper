<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo(products::class, 'product_id', 'id');
    }
}
