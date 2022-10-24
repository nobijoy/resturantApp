<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    
    public function subCategory() {
        return $this->belongsTo(MenuSubCategory::class, 'menu_sub_category_id', 'id');
    }
}
