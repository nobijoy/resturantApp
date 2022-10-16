<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\About;
class AboutController extends Controller
{
    public function aboutpageUpdate(Request $request){

        if($request->isMethod('post')){

            DB::beginTransaction();
            try{
                $data = About::find(1);
                if(!$data){
                    $data = new About();
                }

                $data->title = $request->title;
                $data->details = $request->details;

                $data->save();
                DB::commit();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = About::find(1);
        return view('admin.aboutpage', compact('data'));

    }
}
