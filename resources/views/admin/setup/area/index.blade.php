@extends('master.admin.master')

@section('title')
    Booking
@endsection

@section('body')

    <div class="row">
        <div class="col-lg-12 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Manage Area</h2>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <a href="{{route('area.create')}}" class="btn btn-amber btn my-3">
                        <i class="fa fa-plus-square"></i> Add New Area
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                @if($data->is_active == 1)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->details}}</td>
                                    <td>
                                        <form class="form" method="post" action="{{route('area.destroy', $data->id)}}" enctype="multipart/form-data">
                                            <a href="{{route('area.edit', $data->id)}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i> EDIT
                                            </a>
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you really want to delete this')"><i class="fa fa-trash"></i> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
