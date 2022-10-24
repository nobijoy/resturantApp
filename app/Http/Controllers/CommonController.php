<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuSubCategory;

class CommonController extends Controller
{
    public function getSubCatAgainstCat(Request $request){
        $datas = MenuSubCategory::where('menu_category_id', $request->id)->get();

        return json_encode($datas);
    }
}
