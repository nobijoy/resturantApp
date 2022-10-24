<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Models\Area;
use App\Models\LunchMenu;
use App\Models\DinnerMenu;
use App\Models\Parking;
use App\Models\Facility;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Restaurant::where('is_active', 1)->get()->reverse();
        $sl = 0;
        return view('admin.setup.restaurant.index', compact('datas', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::where('is_active', 1)->orderBy('title')->get();
        return view('admin.setup.restaurant.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try{
            $data = new Restaurant();
            $data->area_id = $request->area_id;
            $data->name = $request->name;
            $data->slug = $request->slug;
            $data->short_note = $request->short_note;
            $data->address = $request->address;
            $data->map = $request->map;
            $data->email = $request->email;
            $data->contact_number = $request->contact_number;
            $data->lunch_time = $request->lunch_time;
            $data->dinner_time = $request->dinner_time;

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

            $caroselImg = [];
            if($request->gallery_img && sizeof($request->gallery_img) > 0){
                if($request->file('gallery_img')){
                    foreach ($request->gallery_img as $key1 => $caroImg) {
                        $image = $caroImg;
                        $input = time() . ($key1+1).'gallery_img.' . $image->getClientOriginalExtension();
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
                $data->gallery_img = $allCarosel;
            }

            if($request->menu_card){
                if($request->file('menu_card')){
                    $image = $request->file('menu_card');
                    $input = time() . 'menucard.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $image->move($destinationPath,$input);
                    $data->menu_card = $input;
                }
            }

            $data->save();
            DB::commit();
            return redirect()->route('restaurant.index')->with('success', 'New Restaurant Added Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
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
    public function lunch(Request $request, $id){
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $data = new LunchMenu();
                $data->restaurant_id = $id;
                $data->item = $request->item;
                $data->price = $request->price;
                $data->save();
                DB::commit();
                return back()->with('success', 'New Lunch Item Added Successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Restaurant::findorFail($id);
        $datas = LunchMenu::where('restaurant_id', $id)->get()->reverse();
        $sl = 0;
        return view('admin.setup.restaurant.lunch', compact('data', 'datas', 'sl'));
    }

    public function updaterestaurantLunchItem(Request $request){
        DB::beginTransaction();
        $data = LunchMenu::findorFail($request->id);
        try {
            $data->item = $request->item;
            $data->price = $request->price;
            $data->save();
            DB::commit();
            return back()->with('success', 'Lunch Item Updated Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }

    public function deleterestaurantLunchItem($id)
    {
        DB::beginTransaction();
        try {
            $data = LunchMenu::findorFail($id);
            $data->delete();
            DB::commit();
            return 'Lunch Item Delete Successfully!';
        } catch (Throwable $th) {
            DB::rollback();
            return 'Something Went Wrong!';
        }
    }

    public function dinner(Request $request, $id){
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $data = new DinnerMenu();
                $data->restaurant_id = $id;
                $data->item = $request->item;
                $data->price = $request->price;
                $data->save();
                DB::commit();
                return back()->with('success', 'New Lunch Item Added Successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Restaurant::findorFail($id);
        $datas = DinnerMenu::where('restaurant_id', $id)->get()->reverse();
        $sl = 0;
        return view('admin.setup.restaurant.dinner', compact('data', 'datas', 'sl'));
    }
    public function updaterestaurantDinnerItem(Request $request){
        DB::beginTransaction();
        $data = DinnerMenu::findorFail($request->id);
        try {
            $data->item = $request->item;
            $data->price = $request->price;
            $data->save();
            DB::commit();
            return back()->with('success', 'Dinner Item Updated Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }

    public function deleterestaurantDinnerItem($id)
    {
        DB::beginTransaction();
        try {
            $data = DinnerMenu::findorFail($id);
            $data->delete();
            DB::commit();
            return 'Dinner Item Delete Successfully!';
        } catch (Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
    }

    public function facility(Request $request, $id){
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $data = new Facility();
                $data->restaurant_id = $id;
                if($request->file('icon')){
                    $image = $request->file('icon');
                    $input = time() . 'icon.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(50, 50)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->icon = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->title = $request->title;
                $data->save();
                DB::commit();
                return back()->with('success', 'Facility Added Successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Restaurant::findorFail($id);
        $sl = 0;
        $datas = Facility::where('restaurant_id', $id)->get()->reverse();
        return view('admin.setup.restaurant.facility', compact('data', 'datas', 'sl'));
    }

    
    public function updaterestaurantFacility(Request $request){
        DB::beginTransaction();
        try {
            $data = Facility::findorFail($request->id);
            if($request->file('icon')){
                $image = $request->file('icon');
                $input = time() . 'icon.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
                $img = Image::make($image->getRealPath());
                $img->orientate();
                $img->resize(50, 50)->save($destinationPath.'/'.$input);
                $destinationPath = public_path('/thumbnail');
                $image->move($destinationPath,$input);
                $data->icon = $input;
                $tmpImg = public_path('thumbnail/'.$input);
                if (file_exists($tmpImg)) {
                    unlink($tmpImg);
                }
            }
            $data->title = $request->title;
            $data->save();
            DB::commit();
            return back()->with('success', 'Facility Info Updated Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function deleterestaurantFacility($id)
    {
        DB::beginTransaction();
        try {
            $data = Facility::findorFail($id);
            $data->delete();
            DB::commit();
            return 'Facility Info Delete Successfully!';
        } catch (Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
    }


    public function parking(Request $request, $id){
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $data = new Parking();
                $data->restaurant_id = $id;
                if($request->file('icon')){
                    $image = $request->file('icon');
                    $input = time() . 'icon.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(50, 50)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    $data->icon = $input;
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                $data->title = $request->title;
                $data->save();
                DB::commit();
                return back()->with('success', 'Parking Added Successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $data = Restaurant::findorFail($id);
        $datas = Parking::where('restaurant_id', $id)->get()->reverse();
        $sl = 0;
        return view('admin.setup.restaurant.parking', compact('data', 'datas', 'sl'));
    }

    public function updaterestaurantParking(Request $request){
        DB::beginTransaction();
        try {
            $data = Parking::findorFail($request->id);
            if($request->file('icon')){
                $image = $request->file('icon');
                $input = time() . 'icon.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
                $img = Image::make($image->getRealPath());
                $img->orientate();
                $img->resize(50, 50)->save($destinationPath.'/'.$input);
                $destinationPath = public_path('/thumbnail');
                $image->move($destinationPath,$input);
                $data->icon = $input;
                $tmpImg = public_path('thumbnail/'.$input);
                if (file_exists($tmpImg)) {
                    unlink($tmpImg);
                }
            }
            $data->title = $request->title;
            $data->save();
            DB::commit();
            return back()->with('success', 'Parking Info Updated Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function deleterestaurantParking($id)
    {
        DB::beginTransaction();
        try {
            $data = Parking::findorFail($id);
            $data->delete();
            DB::commit();
            return 'Parking Info Delete Successfully!';
        } catch (Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::where('is_active', 1)->orderBy('title')->get();
        $data = Restaurant::findorFail($id);
        return view('admin.setup.restaurant.edit', compact('areas', 'data'));
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
        DB::beginTransaction();
        $data = Restaurant::findorFail($id);
        try{
            $data->area_id = $request->area_id;
            $data->name = $request->name;
            $data->slug = $request->slug;
            $data->short_note = $request->short_note;
            $data->address = $request->address;
            $data->map = $request->map;
            $data->email = $request->email;
            $data->contact_number = $request->contact_number;
            $data->lunch_time = $request->lunch_time;
            $data->dinner_time = $request->dinner_time;

            if($request->file('cover_img')){
                $image = $request->file('cover_img');
                $input = time() . 'cover_img.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/images');
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

            $caroselImg = [];
            if($request->gallery_img && sizeof($request->gallery_img) > 0){
                if($request->file('gallery_img')){
                    foreach ($request->gallery_img as $key1 => $caroImg) {
                        $image = $caroImg;
                        $input = time() . ($key1+1).'gallery_img.' . $image->getClientOriginalExtension();
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
                $data->gallery_img = $allCarosel;
            }

            if($request->menu_card){
                if($request->file('menu_card')){
                    $image = $request->file('menu_card');
                    $input = time() . 'menucard.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $image->move($destinationPath,$input);
                    $data->menu_card = $input;
                }
            }

            $data->save();
            DB::commit();
            return redirect()->route('restaurant.index')->with('success', 'Restaurant Info updated Successfully!');
        } catch (Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $data = Restaurant::findorFail($id);
            $data->is_active = 0;
            $data->save();
            DB::commit();
            return 'Restaurant Delete Successfully!';
        } catch (Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
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
