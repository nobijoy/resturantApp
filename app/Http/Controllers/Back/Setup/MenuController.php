<?php

namespace App\Http\Controllers\Back\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use App\Models\Menu;
use Image;

class MenuController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MenuCategory::where('is_active', 1)->orderBy('name')->get();
        $datas = Menu::get()->reverse();
        $sl = 0;
        return view('admin.setup.menu.index', compact('categories', 'datas', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = MenuCategory::where('is_active', 1)->orderBy('name')->get();
        return view('admin.setup.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => ['required'],
            'sub_category_id' => ['required'],
            'name' => ['required', 'unique:menus,name,'.$request->id.',id,menu_sub_category_id,'.$request->sub_category_id],
        ]);

        DB::beginTransaction();

        try {
            $data = new Menu;
            $data->name = $request->name;
            $data->menu_sub_category_id = $request->sub_category_id;
            $data->price = $request->price;
            $data->description = $request->description;
            if($request->file('image')){
                $image = $request->file('image');
                $input = time() . 'image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
                $img = Image::make($image->getRealPath());
                $img->orientate();
                $img->resize(180, 120)->save($destinationPath.'/'.$input);
                $destinationPath = public_path('/thumbnail');
                $image->move($destinationPath,$input);
                $data->image = $input;
                $tmpImg = public_path('thumbnail/'.$input);
                if (file_exists($tmpImg)) {
                    unlink($tmpImg);
                }
            }
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'New Menu Created Successfully');
            
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Somethings went wrong. Try Again');
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
        $data = Menu::findorFail($id);
        $categories = MenuCategory::where('is_active', 1)->orderBy('name')->get();
        $subCategories = MenuSubCategory::where('is_active', 1)->where('menu_category_id', $data->menu_sub_category_id)->orderBy('name')->get();
        return view('admin.setup.menu.create', compact('categories', 'subCategories', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'category_id' => ['required'],
            'sub_category_id' => ['required'],
            'name' => ['required', 'unique:menus,name,'.$request->id.',id,menu_sub_category_id,'.$request->sub_category_id],
        ]);

        DB::beginTransaction();

        try {
            $data = Menu::find($id);
            $data->name = $request->name;
            $data->menu_sub_category_id = $request->sub_category_id;
            $data->price = $request->price;
            $data->description = $request->description;
            if($request->file('image')){
                $image = $request->file('image');
                $input = time() . 'image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
                $img = Image::make($image->getRealPath());
                $img->orientate();
                $img->resize(180, 120)->save($destinationPath.'/'.$input);
                $destinationPath = public_path('/thumbnail');
                $image->move($destinationPath,$input);
                $data->image = $input;
                $tmpImg = public_path('thumbnail/'.$input);
                if (file_exists($tmpImg)) {
                    unlink($tmpImg);
                }
            }
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'Menu Updated Successfully');
            
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Somethings went wrong. Try Again');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $data = Menu::findorFail($id);
            $data->is_active = 0;
            $data->save();
            DB::commit();
            return 'Menu Inactive Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            $data = Menu::find($id);
            $data->is_active = 1;
            $data->save();
            DB::commit();
            return 'Menu Activated Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }
}
