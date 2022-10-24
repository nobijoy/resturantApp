<?php

namespace App\Http\Controllers\Back\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\AppSetting;
use function PHPUnit\Framework\throwException;

class SettingsController extends Controller
{
    public function appItemUpdate(Request $request){


        if($request->isMethod('post')){

            DB::beginTransaction();
            try{
                $data = AppSetting::find(1);
                if(!$data){
                    $data = new AppSetting();
                }
                if($request->file('logo')){
                    $image = $request->file('logo');
                    $input = time() . 'logo.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(275, 80)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->logo = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('favicon')){
                    $image = $request->file('favicon');
                    $input = time() . 'favicon.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(30, 30)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->favicon = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->app_title = $request->app_title;
                $data->top_nav_bg = $request->top_nav_bg;
                $data->top_nav_color = $request->top_nav_color;
                $data->top_nav_scroll_color = $request->top_nav_scroll_color;
                $data->primary_color = $request->primary_color;
                $data->primary_bg_color = $request->primary_bg_color;

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = AppSetting::find(1);
        return view('admin.managesite', compact('data'));

    }

}
