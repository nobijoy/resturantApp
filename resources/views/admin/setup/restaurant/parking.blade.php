
@section('body')@extends('master.admin.master')

@section('title')
    Restaurant Lunch Menu
@endsection

@section('body')

    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h3 class="content-header-title">
                    <a href="{{ route ('restaurant.index')}}" class="btn btn-primary">Back to List<i class="fa fa-eye"></i></a>
                </h3>
            </div>
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route ('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Restaurant</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Restaurant Parking</a>
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
                                <h4 class="card-title" id="basic-layout-card-center">Add Parking Info</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="post" action="{{ route('restaurant.parking',$data->id) }}" enctype="multipart/form-data">@csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group col-md-4 ">
                                                    <label for="name">Restaurant Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Restaurant Name" name="name" value="{{$data->name}}" readonly>
                                                </div>

                                                <div class="form-group col-md-4 ">
                                                    <label for="icon">Icon</label>
                                                    <input type="file" id="icon" class="form-control" name="icon" value="">
                                                </div>

                                                <div class="form-group col-md-4 ">
                                                    <label for="title">Title</label>
                                                    <input type="text" id="title" class="form-control" placeholder="Title" name="title" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions text-right">
                                            <button type="submit" id="submitBtn" class="btn btn-primary"> Add </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Column selectors table -->
            <section id="column-selectors">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Parking Info List</h2>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered action_table">
                                        <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (sizeof ($datas) > 0)
                                            @foreach($datas as $item)
                                                <tr>
                                                    <td>{{++$sl}}</td>
                                                    <td><img src="{{ asset('uploads/image/'.$item->icon)}}" width="50px" height="50px" alt=""></td>
                                                    <td>{{$item->title}}</td>
                                                    <td>
                                                        <a data-toggle="modal"data-target="#editParking" data-target-id="{{$item->id}}"
                                                           data-title="{{$item->title}}">
                                                            <button type="button" title="Edit" class="btn btn-icon btn-outline-primary btn-sm">
                                                                <i class="fa fa-pencil-square"></i></button>
                                                        </a>
                                                        <button type="button" class="btn btn-icon btn-outline-danger btn-sm" title="Inactive"
                                                                onclick="deleteData('{{ route('restaurantParking.delete', [$item->id]) }}')">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
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
            <!-- Start Add Modal -->
            <div class="modal fade text-left" id="editParking" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel35">Edit Parking</h3>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route ('restaurantParking.update')}}" method="post"  class="clearForm form"
                              enctype="multipart/form-data">@csrf
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id">
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="eicon">Change Icon</label>
                                    <input type="file" name="icon" class="form-control" id="eicon">
                                </fieldset>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="etitle">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="etitle" placeholder="Title" required>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal" value="Close">
                                <input type="submit" id="submitBtn" class="btn btn-outline-primary" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add Modal -->
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $("#editParking").on("show.bs.modal", function (e) {
            var id = $(e.relatedTarget).data('target-id');
            var title = $(e.relatedTarget).data('title');

            $('.modal-body #id').val(id);
            $('.modal-body #etitle').val(title);

        });

        $("#editParking").on("hide.bs.modal", function (e) {
            location.reload();
        });
    </script>
@endsection
