<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use DB;
use App\Models\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Area::orderBy('id')->get();

        return view('admin.setup.area.index', compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setup.area.create');
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

                $data = new Area();
                $data->title = $request->title;
                $data->details = $request->details;

                $data->save();
                DB::commit();
                return back()->with('success', 'Area Added successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        return redirect('area.create')->with('message', 'Area Added Successfully');

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
        $data = Area::find($id);
        return view('admin.setup.area.edit',compact('data'));
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
            try{

                $data =Area::find($id);
                $data->title = $request->title;
                $data->details = $request->details;

                $data->save();
                DB::commit();
                return redirect()->route('area.index')->with('message', 'Area Updated Successfully');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
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

        $data =Area::find($id);
        $data->is_active = 0;
        $data->save();
        return redirect()->route('area.index')->with('message', 'Area Deleted Successfully');    }
}
