<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    public function categorys()
    {
        return $this->belongsTo(categorys::class, 'sub_category', 'id');
    }
    public function brands()
    {
        return $this->belongsTo(brands::class, 'brand', 'id');
    }
}
