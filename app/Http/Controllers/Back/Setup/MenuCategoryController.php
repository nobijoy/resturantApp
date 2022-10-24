<?php

namespace App\Http\Controllers\Back\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\MenuCategory;

class MenuCategoryController extends Controller
{
    public function index()
    {
        $datas = MenuCategory::where('is_active', 1)->get()->reverse();
        $sl = 0;
        return view('admin.setup.menuCategory.index', compact('datas', 'sl'));
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
            'name' => ['required', 'string', 'unique:menu_categories'],
        ]);

        DB::beginTransaction();

        try {
            $data = new MenuCategory;
            $data->name = $request->name;
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'New MenuCategory Created Successfully');
            
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
        $validatedData = $request->validate([
            'name' => ['required', 'unique:menu_categories,name,' . $request->id],
        ]);

        DB::beginTransaction();

        try {
            $data = MenuCategory::find($request->id);
            $data->name = $request->name;
            $data->is_active = 1;
            $data->save();
            DB::commit();

            return back()->with('success', 'MenuCategory Updated Successfully');
            
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
            $data = MenuCategory::findorFail($id);
            $data->is_active = 0;
            $data->save();
            DB::commit();
            return 'MenuCategory Inactive Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }

    public function restore($id)
    {
        DB::beginTransaction();
        try {
            $data = MenuCategory::find($id);
            $data->is_active = 1;
            $data->save();
            DB::commit();
            return 'MenuCategory Activated Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somrthings Went Wrong!';
        }
    }

}
