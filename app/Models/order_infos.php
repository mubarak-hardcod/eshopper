<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_infos extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsTo(products::class, 'product', 'id');
    }
    public function orders()
    {
        return $this->belongsTo(orders::class, 'order_id', 'id');
    }

}
