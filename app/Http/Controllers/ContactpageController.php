<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Contactpage;

class ContactpageController extends Controller
{

    public function contactpageUpdate(Request $request){
        if($request->isMethod('post')){

            DB::beginTransaction();
            try{
                $data = Contactpage::find(1);
                if(!$data){
                    $data = new Contactpage();
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
                if($request->file('location_img')){
                    $image = $request->file('location_img');
                    $input = time() . 'location_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1000, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->location_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('cancel_booking_img')){
                    $image = $request->file('cancel_booking_img');
                    $input = time() . 'cancel_booking_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1000, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->cancel_booking_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('feedback_img')){
                    $image = $request->file('feedback_img');
                    $input = time() . 'feedback_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1000, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->feedback_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('career_img')){
                    $image = $request->file('career_img');
                    $input = time() . 'career_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1000, 548)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->career_img = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }

                $data->title = $request->title;
                $data->short_note = $request->short_note;
                $data->address = $request->address;
                $data->phone_number = $request->phone_number;
                $data->customer_care_email = $request->customer_care_email;
                $data->recruitment = $request->recruitment;
                $data->accounts = $request->accounts;
                $data->payroll = $request->payroll;

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Contactpage::find(1);
        return view('admin.contactpage', compact('data'));

    }

}
