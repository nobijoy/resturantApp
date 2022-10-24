@extends('master.front.master')
@section('title')
Menus
@endsection

@section('body')




<div class="banner ">
    <img src="img/menu-hero.jpg" class="d-block w-100 img-fluid" alt="...">
</div>

<!-- Body Section -->
@if (sizeof($menuCats) > 0)
<section class="menu py-md-5 my-md-5">
    <div class="container">
        <h1 class="text-center head-col fs-1 my-3">Main Menu</h1>
        <div class="text-center mt-md-5">
            <ul class="nav nav-pills mb-3 text-center justify-content-center d-flex" id="pills-tab" role="tablist">
                @foreach ($menuCats as $ckey=>$cat)
                    <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                        <button @if($cat->id == 2) class="nav-link btn-menu active" @else class="nav-link btn-menu" @endif id="tab_{{$cat->id}}-tab" data-bs-toggle="pill"
                            data-bs-target="#tab_{{$cat->id}}" type="button" role="tab" aria-controls="{{$cat->id}}"
                            aria-selected="true">
                            <p class="no-mb fw-semibold"><i @if($ckey == 0) class="fa-solid fa-cookie-bite" @elseif ($ckey == 1) class="fa-solid fa-bowl-rice" 
                            @elseif ($ckey == 2) class="fa-solid fa-cheese" @elseif ($ckey == 3) class="fa-solid fa-wine-glass-empty" 
                            @elseif ($ckey == 4) class="fa-solid fa-burger" @else class="fa-solid fa-cookie-bite" @endif></i>{{$cat->name}}</p>
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content py-md-5 mx-auto" id="pills-tabContent">
                @foreach ($menuCats as $ckey => $cat)
                    <div @if($cat->id == 2) class="tab-pane fade active show" @else class="tab-pane fade" @endif id="tab_{{$cat->id}}" role="tabpanel"
                        aria-labelledby="pills-starter-tab">
                        <div class="row text-grey justify-content-center">
                            @foreach ($menuSubCats->where('menu_category_id', $cat->id) as $skey => $subCat)
                                <div class="col-md-5 bg-container m-md-2 py-3">
                                    <h1 class="py-2">{{$subCat->name}}</h1>
                                    <p class="py-2">{{$subCat->short_note}}</p>
                                    @foreach ($menus->where('menu_sub_category_id', $subCat->id) as $mkey => $menu)
                                        <div class="row menu-item m-md-2" data-name="{{$menu->name}}" data-description="{{$menu->description}}" data-image="{{asset('uploads/image/'.$menu->image)}}">
                                            <div class="col-3">
                                                @if ($menu->image)
                                                    <img src="{{asset('uploads/image/'.$menu->image)}}" alt="" width="120px" height="80px">
                                                @endif
                                            </div>
                                            <div class="col-7 text-start">
                                                <p><a href="javascript:void(0)" class="newsweetalert text-dark" ><u>{{$menu->name}}</u></a></p>
                                            </div>
                                            <div class="col-2 ps-1">
                                                <h5 class="fw-semibold">£{{$menu->price}}</h5>
                                            </div>
                                            <div class="col-12 text-start">
                                                <p class="font-12">{{$menu->description}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
</section>
@endif
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".menu-item").click(function () {
                var name = $(this).data('name');
                var img = $(this).data('image');
                var image = '#';
                if (img != '') {
                    image = img;
                }
                var description = $(this).data('description');
                Swal.fire({
                    title: name,
                    text: description,
                    imageUrl: image,
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    showCloseButton: true,
                    showCancelButton: false,
                    showConfirmButton: false,
                })
            })
        })
    </script>
@endsection