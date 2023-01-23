<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    public function order_infos()
    {
        return $this->belongsTo(order_infos::class, 'order_id', 'id');
    }
    public function products()
    {
        return $this->belongsTo(products::class, 'product', 'id');
    }
}
