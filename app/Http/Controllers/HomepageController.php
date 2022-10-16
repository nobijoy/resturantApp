<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Homepage;
class HomepageController extends Controller
{

    public function homepageUpdate(Request $request){

        if($request->isMethod('post')){
//            dd($request->all());
            DB::beginTransaction();
            try{
                $data = Homepage::find(1);
                if(!$data){
                    $data = new Homepage();
                }

                $caroselImg = [];
                if($request->carousel && sizeof($request->carousel) > 0){
                    if($request->file('carousel')){
                        foreach ($request->carousel as $key1 => $caroImg) {
                            $image = $caroImg;
                            $input = time() . ($key1+1).'carousel.' . $image->getClientOriginalExtension();
                            $destinationPath = public_path('uploads/image');
                            $img = Image::make($image->getRealPath());
                            $img->orientate();
                            $img->resize(1920, 1080)->save($destinationPath.'/'.$input);
                            $destinationPath = public_path('/thumbnail');
                            $image->move($destinationPath,$input);
//                            dd($input);
                            array_push($caroselImg, $input);
                            $tmpImg = public_path('thumbnail/'.$input);
                            if (file_exists($tmpImg)) {
                                unlink($tmpImg);
                            }
//                            $image = $ilicenceCopy;
//                            $input = time(). '_il_'.($key1+1).'.'.$ilicenceCopy->getClientOriginalExtension();
//                            $destinationPath = public_path('assets/images/uploads/licence');
//                            $image->move($destinationPath,$input);
                        }
                    }
                    $allCarosel = implode(',', $caroselImg);
                    $data->carousel = $allCarosel;
                }

//                if($request->file('carousel')){
//                    $image = $request->file('carousel');
//                    $input = time() . 'carousel.' . $image->getClientOriginalExtension();
//                    $destinationPath = public_path('uploads/image');
//                    $img = Image::make($image->getRealPath());
//                    $img->orientate();
//                    $img->resize(128, 128)->save($destinationPath.'/'.$input);
//                    $destinationPath = public_path('/thumbnail');
//                    $image->move($destinationPath,$input);
//                    $data->carousel = $input;
//                    $tmpImg = public_path('thumbnail/'.$input);
//                    if (file_exists($tmpImg)) {
//                        unlink($tmpImg);
//                    }
//                }
                if($request->file('section_2_img_1')){
                    $image = $request->file('section_2_img_1');
                    $input = time() . 'section_2_img_1.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 720)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_2_img_1 = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('section_2_img_2')){
                    $image = $request->file('section_2_img_2');
                    $input = time() . 'section_2_img_2.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 720)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_2_img_2 = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('section_2_img_3')){
                    $image = $request->file('section_2_img_3');
                    $input = time() . 'section_2_img_3.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 720)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_2_img_3 = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('section_img_3')){
                    $image = $request->file('section_img_3');
                    $input = time() . 'section_img_3.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1920, 1080)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_img_3 = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('section_img_4')){
                    $image = $request->file('section_img_4');
                    $input = time() . 'section_img_4.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 720)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_img_4 = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Homepage::find(1);
        return view('admin.homepage', compact('data'));

    }


}
