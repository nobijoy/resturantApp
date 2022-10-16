<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use DB;
use Image;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Restaurant::orderBy('id')->get();

        return view('admin.setup.restaurant.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setup.restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){

            DB::beginTransaction();
            try{

                $data = new Restaurant();
                $data->area_id = $request->area_id;
                $data->name = $request->name;


                if($request->file('cover_img')){
                    $image = $request->file('cover_img');
                    $input = time() . 'cover_img.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(1920, 1080)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->cover_img = $image;
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
                            array_push($caroselImg, $input);
                            $tmpImg = public_path('thumbnail/'.$input);
                            if (file_exists($tmpImg)) {
                                unlink($tmpImg);
                            }

                        }
                    }
                    $allCarosel = implode(',', $caroselImg);
                    $data->carousel = $allCarosel;
                }

                $data->save();
                DB::commit();
                return redirect()->route('restaurant.create')->with('message', 'Area Added Successfully');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
