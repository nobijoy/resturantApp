@extends('master.admin.master')
@section('title')
    Booking
@endsection

@section('body')

    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card-content collpase show">
            <div class="card-body">
                <form class="form" method="POST" action="{{route('area.restaurant', $data->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h4 class="form-section"><i class="feather icon-user"></i> Edit Area</h4>
                    <div class="row align-items-center d-block">

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="area_id">Area Id</label>
                            <input type="text" id="area_id" class="form-control" placeholder="" name="area_id" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="name">Restaurant Name</label>
                            <input type="text" id="name" class="form-control" placeholder="" name="name" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="cover_img">Select Cover Image (Image Size Should Be 1920 x 1080 <span class="danger">*</span>) </label>
                            <input type="file" name="cover_img" id="cover_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="short_note">Short Note</label>
                            <input type="text" id="short_note" class="form-control" placeholder="" name="short_note" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="gallery_img">Select Carousel (Image Size Should Be 1080 x 720 <span class="danger">*</span>) </label>
                            <input type="file" name="gallery_img[]" id="gallery_img" class="form-control" multiple>
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="menu_card">Menu Card</label>
                            <input type="file" name="menu_card" id="menu_card" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" placeholder="" name="address" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="map">Google Map</label>
                            <textarea type="text" id="map" class="form-control" name="map" value="" style="height: 250px"></textarea>
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="" name="email" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" id="contact_number" class="form-control" placeholder="" name="contact_number" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="lunch_time">Lunch Time</label>
                            <input type="text" id="lunch_time" class="form-control" placeholder="" name="lunch_time" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="dinner_time">Dinner Time</label>
                            <input type="text" id="dinner_time" class="form-control" placeholder="" name="dinner_time" value="">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <button type="button" class="btn btn-warning mr-1">
                                <i class="feather icon-x"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
