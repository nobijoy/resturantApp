<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Bookingpage;

class BookingpageController extends Controller
{
    public function bookingpageUpdate(Request $request)
    {
        if ($request->isMethod('post')) {

            DB::beginTransaction();
            try {
                $data = Bookingpage::find(1);
                if (!$data) {
                    $data = new Bookingpage();
                }
                if ($request->file('cover_img')) {
                    $image = $request->file('cover_img');
                    $input = time() . 'cover_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1920, 548)->save($destinationPath . '/' . $input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath, $input);
                    $data->cover_img = $input;
                    $tmpImg = public_path('thumbnail/' . $input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }

                $data->title = $request->title;
                $data->short_note = $request->short_note;

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Bookingpage::find(1);
        return view('admin.bookingpage', compact('data'));

    }
}
