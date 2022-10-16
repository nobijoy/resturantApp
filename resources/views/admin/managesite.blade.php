@extends('master.admin.master')
@section('title')
    Booking
@endsection

@section('body')

    <div class="card">
        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
        <div class="card-content collpase show">
            <div class="card-body">
                <form class="form" method="post" action="{{ route ('managewebsite') }}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-section"><i class="feather icon-user"></i> Manage Website</h4>
                    <div class="row align-items-center d-block">
                        @if($data && $data->logo)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->logo)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="logo">Select LOGO (Logo Size Should Be 80 x 80 <span class="danger">*</span>): </label>
                            <input type="file" name="logo" id="logo" class="form-control">
                        </div>

                        @if($data && $data->favicon)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->favicon)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="favicon">Select Favicon (Favicon Size Should Be 30 x 30 <span class="danger">*</span>): </label>
                            <input type="file" id="favicon" name="favicon" id="favicon" class="form-control">
                        </div>


                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="app_title">Title</label>
                            <input type="text" id="app_title" class="form-control" placeholder="" name="app_title" value="{{$data ? $data->app_title : ''}}">
                        </div>


                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="top_nav_bg">Header Background Color</label>
                            <input type="color" id="top_nav_bg" class="form-control" name="top_nav_bg" value="{{$data ? $data->top_nav_bg : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="top_nav_color">Navbar Color</label>
                            <input type="color" id="top_nav_color" class="form-control" placeholder="color" name="top_nav_color" value="{{$data ? $data->top_nav_color : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="top_nav_scroll_color">Navbar Scroll Color</label>
                            <input type="color" id="top_nav_scroll_color" class="form-control" placeholder="color" name="top_nav_scroll_color" value="{{$data ? $data->top_nav_scroll_color : ''}}">
                        </div>


                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="primary_color">Primary Color</label>
                            <input type="color" id="primary_color" class="form-control" placeholder="color" name="primary_color" value="{{$data ? $data->primary_color : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="primary_bg_color">Primary Background Color</label>
                            <input type="color" id="primary_bg_color" class="form-control" placeholder="color" name="primary_bg_color" value="{{$data ? $data->primary_bg_color : ''}}">
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
