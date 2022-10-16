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
                <form class="form" method="post" action="{{ route ('mananagehomepage') }}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-section"><i class="feather icon-user"></i> Manage Homepage</h4>
                    <div class="row align-items-center d-block">

                        @if($data && $data->carousel)
                            @php
                                $allCarsel = explode(',', $data->carousel);
                            @endphp
                            <div class="col-6 mb-2 mx-auto">
                                @foreach($allCarsel as $carsel)
                                    <img src="{{ asset('uploads/image/'.$carsel)}}" class="mx-2 img-box">
                                @endforeach
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="carousel">Select Carousel (Image Size Should Be 1920 x 1080 <span class="danger">*</span>): </label>
                            <input type="file" name="carousel[]" id="carousel" class="form-control" multiple>
                        </div>

                        @if($data && $data->section_2_img_1)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_2_img_1)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_2_img_1">Select Section 2 Image 1 (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_2_img_1" id="section_2_img_1" class="form-control">
                        </div>

                        @if($data && $data->section_2_img_2)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_2_img_2)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_2_img_2">Select Section 2 Image 2 (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_2_img_2" id="section_2_img_2" class="form-control">
                        </div>

                        @if($data && $data->section_2_img_3)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_2_img_3)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_2_img_3">Select Section 2 Image 3 (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_2_img_3" id="section_2_img_3" class="form-control">
                        </div>

                        @if($data && $data->section_img_3)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_img_3)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_img_3">Select Section Image 3 (Image Size Should Be 1920 x 1080 <span class="danger">*</span>): </label>
                            <input type="file" name="section_img_3" id="section_img_3" class="form-control">
                        </div>

                        @if($data && $data->section_img_4)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_img_4)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_img_4">Select Section Image 4 (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_img_4" id="section_img_4" class="form-control">
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
