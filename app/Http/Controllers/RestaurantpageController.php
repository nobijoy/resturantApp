<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Restaurantpage;

class RestaurantpageController extends Controller
{

    public function restaurantpageUpdate(Request $request)
    {
        if($request->isMethod('post')){

            DB::beginTransaction();
            try{
                $data = Restaurantpage::find(1);
                if(!$data){
                    $data = new Restaurantpage();
                }
                if($request->file('cover_img')){
                    $image = $request->file('cover_img');
                    $input = time() . 'cover_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1920, 1080)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->cover_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }

                $data->title = $request->title;


                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Restaurantpage::find(1);
        return view('admin.restaurantpage', compact('data'));
    }
}
