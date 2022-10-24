@extends('master.admin.master')
@section('title')
    About
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
                <form class="form" method="post" action="{{ route ('mananageaboutpage') }}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-section"><i class="feather icon-user"></i> Manage Restaurant Page</h4>
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

                        @if($data && $data->section_2_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_2_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_2_img">Select Section 2 Image (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_2_img" id="section_2_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_2_title">Section 2 Title</label>
                            <input type="text" id="section_2_title" class="form-control" placeholder="" name="section_2_title" value="{{$data ? $data->section_2_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_2_short_note">Section 2 Short Note</label>
                            <input type="text" id="section_2_short_note" class="form-control" name="section_2_short_note" value="{{$data ? $data->section_2_short_note : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_2_description">Section 2 Description</label>
                            <textarea type="text" id="section_2_description" class="form-control" name="section_2_description" value="">{{$data ? $data->section_2_description : ''}}</textarea>
                        </div>

                        @if($data && $data->section_3_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_3_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_3_img">Select Section 3 Image (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_3_img" id="section_3_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_3_title">Section 3 Title</label>
                            <input type="text" id="section_3_title" class="form-control" placeholder="" name="section_3_title" value="{{$data ? $data->section_3_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_3_description">Section 3 Description</label>
                            <textarea type="text" id="section_3_description" class="form-control" name="section_3_description" >{{$data ? $data->section_3_description : ''}}</textarea>
                        </div>

                        @if($data && $data->section_4_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_4_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_4_img">Select Section 4 Image (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_4_img" id="section_4_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_4_title">Section 4 Title</label>
                            <input type="text" id="section_4_title" class="form-control" placeholder="" name="section_4_title" value="{{$data ? $data->section_4_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_4_description">Section 4 Description</label>
                            <textarea type="text" id="section_4_description" class="form-control" name="section_4_description" >{{$data ? $data->section_4_description : ''}}</textarea>
                        </div>

                        @if($data && $data->section_5_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_5_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_5_img">Select Section 5 Image (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_5_img" id="section_4_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_5_title">Section 5 Title</label>
                            <input type="text" id="section_5_title" class="form-control" placeholder="" name="section_5_title" value="{{$data ? $data->section_5_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_5_description">Section 5 Description</label>
                            <textarea type="text" id="section_5_description" class="form-control" name="section_5_description">{{$data ? $data->section_5_description : ''}}</textarea>
                        </div>

                        @if($data && $data->section_6_img)
                            <div class="col-6 mb-2 mx-auto">
                                <img src="{{ asset('uploads/image/'.$data->section_6_img)}}" class="img-box">
                            </div>
                        @endif

                        <div class="form-group col-6 mb-2 mx-auto">
                            <label for="section_6_img">Select Section 6 Image (Image Size Should Be 1080 x 720 <span class="danger">*</span>): </label>
                            <input type="file" name="section_6_img" id="section_4_img" class="form-control">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_6_title">Section 6 Title</label>
                            <input type="text" id="section_6_title" class="form-control" placeholder="" name="section_6_title" value="{{$data ? $data->section_6_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_6_description">Section 6 Description</label>
                            <textarea type="text" id="section_6_description" class="form-control" name="section_6_description">{{$data ? $data->section_6_description : ''}}</textarea>
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_7_title">Section 7 Title</label>
                            <input type="text" id="section_7_title" class="form-control" placeholder="" name="section_7_title" value="{{$data ? $data->section_7_title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_7_short_note">Section 7 Short Note</label>
                            <input type="text" id="section_7_short_note" class="form-control" name="section_7_short_note" value="{{$data ? $data->section_7_short_note : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="section_2_description">Section 7 Description</label>
                            <textarea type="text" id="section_7_description" class="form-control" name="section_7_description" value="">{{$data ? $data->section_7_description : ''}}</textarea>
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
