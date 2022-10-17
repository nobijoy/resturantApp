
@section('body')@extends('master.admin.master')

@section('title')
Restaurant List
@endsection

@section('body')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="{{ route ('restaurant.create')}}" class="btn btn-primary">Add<i class="fa fa-plus"></i></a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Restaurant</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">Restaurant List</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
        </div>

        <section id="column-selectors">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Restaurants List</h2>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered action_table">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Area id</th>
                                            <th>Name</th>
                                            <th>Cover img</th>
                                            <th>Short Description</th>
                                            <th>Menu card pdf</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Contact number</th>
                                            <th>Lunch time</th>
                                            <th>Dinner time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (sizeof ($datas) > 0)
                                        @foreach($datas as $data)
                                        <tr>
                                            <td>{{++$sl}}</td>
                                            <td>{{$data->area->title}}</td>
                                            <td>{{$data->name}}</td>
                                            <td><img src="{{ asset('uploads/image/'.$data->cover_img)}}" width="120px" height="80px" alt=""></td>
                                            <td>{{mb_strimwidth($data->short_note, 0, 97, '...')}}</td>
                                            <td>
                                                @if ($data->menu_card)
                                                    <a href="{{ asset('uploads/image/'.$data->menu_card)}}" target="_blank" rel="noopener noreferrer" class="btn btn-info">View Menu card</a>
                                                @endif
                                            </td>
                                            <td>{{$data->address}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->contact_number}}</td>
                                            <td>{{$data->lunch_time}}</td>
                                            <td>{{$data->dinner_time}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="false"> Actions </button>
                                                    
                                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="{{ route('restaurant.edit',$data->id) }}"><i class="fa fa-angle-double-right"></i> Edit</a>
                                                        <a class="dropdown-item" href="{{ route('restaurant.lunch',$data->id) }}"><i class="fa fa-angle-double-right"></i> Lunch Menu</a>
                                                        <a class="dropdown-item" href="{{ route('restaurant.dinner',$data->id) }}"><i class="fa fa-angle-double-right"></i> Dinner Menu</a>
                                                        <a class="dropdown-item" href="{{ route('restaurant.facility',$data->id) }}"><i class="fa fa-angle-double-right"></i> Facility</a>
                                                        <a class="dropdown-item" href="{{ route('restaurant.parking',$data->id) }}"><i class="fa fa-angle-double-right"></i> Parking</a>
                                                        <a class="dropdown-item" onclick="deleteData('{{ route('restaurant.delete', [$data->id]) }}')">
                                                            <i class="fa fa-angle-double-right"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
