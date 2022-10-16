@extends('master.admin.master')

@section('title')
    Booking
@endsection

@section('body')

    <div class="row">
        <div class="col-lg-12 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Manage Restaurants</h2>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <a href="{{route('restaurant.create')}}" class="btn btn-amber btn my-3">
                        <i class="fa fa-plus-square"></i> Add New Restaurants
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Area id</th>
                                <th>Name</th>
                                <th>Cover img</th>
                                <th>Short note</th>
                                <th>Gallery img (multiple)</th>
                                <th>Menu card pdf</th>
                                <th>Address</th>
                                <th>Google map</th>
                                <th>Email</th>
                                <th>Contact number</th>
                                <th>Lunch time</th>
                                <th>Dinner time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                @if($data->is_active == 1)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$data->area_id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->cover_img}}</td>
                                    <td>{{$data->short_note}}</td>
                                    <td>{{$data->gallery_img}}</td>
                                    <td>{{$data->menu_card}}</td>
                                    <td>{{$data->address}}</td>
                                    <td>{{$data->map}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->contact_number}}</td>
                                    <td>{{$data->lunch_time}}</td>
                                    <td>{{$data->dinner_time}}</td>
                                    <td>
                                        <form class="form" method="post" action="" enctype="multipart/form-data">
{{--                                            {{route('restaurant.destroy', $data->id)}}--}}
                                            <a href="" class="btn btn-success btn-sm">
{{--                                                {{route('restaurant.edit', $data->id)}}--}}
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
