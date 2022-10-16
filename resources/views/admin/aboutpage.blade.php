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
                <form class="form" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <h4 class="form-section"><i class="feather icon-user"></i> Manage About Page</h4>
                    <div class="row align-items-center d-block">

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" placeholder="" name="title" value="{{$data ? $data->title : ''}}">
                        </div>

                        <div class="form-group col-md-6 mb-2 mx-auto">
                            <label for="details">Details</label>
                            <textarea type="text" id="details" class="form-control summernote" name="details" value="">{{$data ? $data->details : ''}}</textarea>

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
