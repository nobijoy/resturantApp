@extends('master.admin.master')

@section('title')
Add New Restaurant
@endsection

@section('body')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="{{ route ('restaurant.index')}}" class="btn btn-primary">Restaurant  List<i class="fa fa-eye"></i></a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Restaurant</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">Add Restaurant</a>
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

        <!-- Column selectors table -->
        <section id="basic-form-layouts">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-card-center">Add New Restaurant</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form" method="post" action="{{ route ('restaurant.store') }}" enctype="multipart/form-data">@csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label for="area_id">Select Area</label>
                                                <select name="area_id" id="area_id" class="form-control select2">
                                                    <option value="">Select</option>
                                                    @foreach ($areas as $type)
                                                        <option value="{{$type->id}}">{{$type->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="name">Restaurant Name <span class="text-danger">*</span></label>
                                                <input type="text" id="name" class="form-control" placeholder="Restaurant Name" name="name" value="" required>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="cover_img">Cover Image (Image Size Should Be 1920 x 1080 <span class="danger">*</span>) </label>
                                                <input type="file" name="cover_img" id="cover_img" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="short_note">Short Note</label>
                                                <input type="text" id="short_note" class="form-control" placeholder="" name="short_note" value="">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="gallery_img">Gallary Image (Image Size Should Be 1080 x 720) </label>
                                                <input type="file" name="gallery_img[]" id="gallery_img" class="form-control" multiple>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="menu_card">Menu Card (pdf)</label>
                                                <input type="file" name="menu_card" id="menu_card" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="address">Address</label>
                                                <input type="text" id="address" class="form-control" placeholder="" name="address" value="">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="map">Google Map Location</label>
                                                <textarea type="text" id="map" class="form-control" name="map" value=""></textarea>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" placeholder="" name="email" value="">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="contact_number">Contact Number</label>
                                                <input type="text" id="contact_number" class="form-control" placeholder="" name="contact_number" value="">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="lunch_time">Lunch Time</label>
                                                <input type="text" id="lunch_time" class="form-control" placeholder="" name="lunch_time" value="">
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label for="dinner_time">Dinner Time</label>
                                                <input type="text" id="dinner_time" class="form-control" placeholder="" name="dinner_time" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions text-right">
                                        <a href="{{ route ('restaurant.index')}}" class="btn btn-warning mr-1">
                                            <i class="feather icon-x"></i> Cancel</a>
                                        <button type="submit" id="submitBtn" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Column selectors table -->
    </div>
</div>

@endsection