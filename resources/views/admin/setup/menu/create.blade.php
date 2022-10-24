@extends('master.admin.master')

@section('title')
Add New Menu
@endsection

@section('body')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-1">
            <h3 class="content-header-title">
                <a href="{{ route ('menu.index')}}" class="btn btn-primary">Menu List<i class="fa fa-eye"></i></a>
            </h3>
        </div>
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Menu</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">Add Menu</a>
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
                            <h4 class="card-title" id="basic-layout-card-center">Add New Menu</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form" method="post" action="{{ route ('menu.store') }}" enctype="multipart/form-data">@csrf
                                    <div class="form-body">
                                        @include('admin.setup.menu.form')
                                    </div>

                                    <div class="form-actions text-right">
                                        <a href="{{ route ('menu.index')}}" class="btn btn-warning mr-1">
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var url = "{{ route ('getSubCatAgainstCat') }}";
            $("#category_id").on("change", function(){
                var id = $(this).val();
                if (id != '') {
                    getSubCatAgainstCat(id, url, '#sub_category_id');
                }
            });
        })
    </script>
@endsection