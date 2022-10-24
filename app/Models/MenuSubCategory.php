<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id', 'id');
    }
}
