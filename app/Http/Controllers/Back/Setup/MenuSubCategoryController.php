<?php

namespace App\Http\Controllers\Back\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;

class MenuSubCategoryController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::where('is_active', 1)->orderBy('name')->get();
        $datas = MenuSubCategory::where('is_active', 1)->get()->reverse();
        $sl = 0;
        return view('admin.setup.menuSubCategory.index', compact('categories', 'datas', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => ['required', 'unique:menu_sub_categories,name,'.$request->id.',id,menu_category_id,'.$request->category_id],
        ]);

        DB::beginTransaction();

        try {
            $data = new MenuSubCategory;
            $data->name = ucwords(strtolower($request->name));
            $data->menu_category_id = $request->category_id;
            $data->short_note = $request->short_note;
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'New Sub Category Created Successfully');
            
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
        //
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
            'name' => ['required', 'unique:menu_sub_categories,name,'.$request->id.',id,menu_category_id,'.$request->category_id],
        ]);

        DB::beginTransaction();

        try {
            $data = MenuSubCategory::find($request->id);
            $data->name = ucwords(strtolower($request->name));
            $data->menu_category_id = $request->category_id;
            $data->short_note = $request->short_note;
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'Sub Category Updated Successfully');
            
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
            $data = MenuSubCategory::findorFail($id);
            $data->is_active = 0;
            $data->save();
            DB::commit();
            return 'Sub Category Inactive Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            $data = MenuSubCategory::find($id);
            $data->is_active = 1;
            $data->save();
            DB::commit();
            return 'Sub Category Activated Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }
}
