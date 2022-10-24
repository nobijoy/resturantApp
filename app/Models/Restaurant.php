<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function area(){
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function total(){
        return $this->where('is_active', 1)->count();
    }
}
