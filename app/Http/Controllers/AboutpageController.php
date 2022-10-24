<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Aboutpage;

class AboutpageController extends Controller
{

    public function aboutpageUpdate(Request $request){

        if($request->isMethod('post')){

            DB::beginTransaction();
            try{
                $data = Aboutpage::find(1);
                if(!$data){
                    $data = new Aboutpage();
                }

                if($request->file('cover_img')){
                    $image = $request->file('cover_img');
                    $input = time() . 'cover_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1920, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->cover_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->title = $request->title;
                $data->short_note = $request->short_note;

                if($request->file('section_2_img')){
                    $image = $request->file('section_2_img');
                    $input = time() . 'section_2_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_2_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->section_2_title = $request->section_2_title;
                $data->section_2_short_note = $request->section_2_short_note;
                $data->section_2_description = $request->section_2_description;


                if($request->file('section_3_img')){
                    $image = $request->file('section_3_img');
                    $input = time() . 'section_3_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 480)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_3_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->section_3_title = $request->section_3_title;
                $data->section_3_description = $request->section_3_description;

                if($request->file('section_4_img')){
                    $image = $request->file('section_4_img');
                    $input = time() . 'section_4_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 480)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_4_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->section_4_title = $request->section_4_title;
                $data->section_4_description = $request->section_4_description;

                if($request->file('section_5_img')){
                    $image = $request->file('section_5_img');
                    $input = time() . 'section_5_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 480)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_5_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->section_5_title = $request->section_5_title;
                $data->section_5_description = $request->section_5_description;

                if($request->file('section_6_img')){
                    $image = $request->file('section_6_img');
                    $input = time() . 'section_6_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1080, 480)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->section_6_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->section_6_title = $request->section_6_title;
                $data->section_6_description = $request->section_6_description;


                $data->section_7_title = $request->section_7_title;
                $data->section_7_short_note = $request->section_7_short_note;
                $data->section_7_description = $request->section_7_description;

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Aboutpage::find(1);
        return view('admin.about_design_2', compact('data'));

    }
}
