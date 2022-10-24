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
                <form class="form" method="post" action="{{route('mananagecontactpage')}}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-section"><i class="feather icon-user"></i> Manage Contact Page</h4>
                    <div class="row align-items-center d-block">

                        @if($data && $data->cover_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->cover_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="cover_img">Select Cover Image (Image Size Should Be 1920 x 1080 <span class="danger">*</span>): </label>
                            <input type="file" name="cover_img" id="cover_img" class="form-control">
                        </div>


                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" placeholder="" name="title" value="{{$data ? $data->title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="short_note">Short Note</label>
                            <input type="text" id="short_note" class="form-control" name="short_note" value="{{$data ? $data->short_note : ''}}">
                        </div>

                        @if($data && $data->location_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->location_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="location_img">Our Locations Cover Image (Image Size Should Be 1920 x 1080): </label>
                            <input type="file" name="location_img" id="location_img" class="form-control">
                        </div>

                        @if($data && $data->cancel_booking_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->cancel_booking_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="cancel_booking_img">Cancel Booking Cover Image (Image Size Should Be 1920 x 1080): </label>
                            <input type="file" name="cancel_booking_img" id="cancel_booking_img" class="form-control">
                        </div>

                        @if($data && $data->feedback_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->feedback_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="feedback_img">Feedback Cover Image (Image Size Should Be 1920 x 1080): </label>
                            <input type="file" name="feedback_img" id="feedback_img" class="form-control">
                        </div>

                        @if($data && $data->career_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->career_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="career_img">Career Cover Image (Image Size Should Be 1920 x 1080): </label>
                            <input type="file" name="career_img" id="career_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" name="address" value="{{$data ? $data->address : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="phone_number">Customer Care Phone</label>
                            <input type="text" id="phone_number" class="form-control" name="phone_number" value="{{$data ? $data->phone_number : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="customer_care_email">Customer Care Email</label>
                            <input type="email" id="customer_care_email" class="form-control" name="customer_care_email" value="{{$data ? $data->customer_care_email : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="recruitment">Recruitment</label>
                            <input type="text" id="recruitment" class="form-control" name="recruitment" value="{{$data ? $data->recruitment : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="accounts">Accounts</label>
                            <input type="text" id="accounts" class="form-control" name="accounts" value="{{$data ? $data->accounts : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="payroll">Payroll</label>
                            <input type="text" id="payroll" class="form-control" name="payroll" value="{{$data ? $data->payroll : ''}}">
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
