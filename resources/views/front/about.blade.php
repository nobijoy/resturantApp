@extends('master.front.master')
@section('title')
About Us
@endsection

@section('body')
    <div class="banner">
        @if ($about->cover_img)
            <img src="{{ asset('uploads/image/'.$about->cover_img) }}" class="d-block w-100 img-fluid" alt="...">
        @else
            <img src="img/about.jpg" class="d-block w-100 img-fluid" alt="...">
        @endif
    </div>
    <section class="menu py-md-5 col-text">
        <div class="container py-md-3 text-center">
            <h1 class="fs-1">{{$about->title}}</h1>
            <p class="py-md-4 fs-5 sub">{{$about->short_note}}</p>
            <!-- <p class="py-md-4 fs-5 sub">At Wildwood, our aim is simple:<em> ‘A friendly team, serving great food, in a place
                    where</br> you can feel at home’</em></p> -->
        </div>
    </section>

    <!-- mid section -->
    <section class="py-md-5">
        @if ($about->section_2_img)
            <img src="{{asset ('uploads/image/'. $about->section_2_img)}}" class="d-block w-100 h-100" alt="">
        @else
            <img src="img/about-mid1.jpg" class="d-block w-100 h-100" alt="">
        @endif
    </section>

    <section class="menu py-md-5">
        <div class="container py-md-3 text-center">
            <h1>{{$about->section_2_title}}</h1>
            <p class="fw-semibold py-md-2">{{$about->section_2_short_note}}</p>
            <p class="py-md-4 fs-5"> {{$about->section_2_description}} </p>
            <div class="justify-content-center py-md-3">
                <p class="fw-semibold">FIND A RESTAURANT</p>
                <select class="form-select btn-rounded w-25 text-center" id="">
                    <option selected>Select Location</option>
                </select>

            </div>
        </div>
    </section>

    <!-- Main divs collage -->
    <section class="main col-text">
        <div class="row mb-md-3 pb-3">
            <div class="col-md-6 pe-md-3 pb-3">
            @if ($about->section_3_img)
                <img src="{{asset ('uploads/image/'. $about->section_3_img)}}" class="d-block w-100 h-100" alt="">
            @else
                <img src="img/about-mid2.jpg" class="d-block w-100 h-100">
            @endif
            </div>
            <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
                <div class="container text-center">
                    <div class="col-md-6 mx-auto">
                        <h1>{{$about->section_3_title}}</h1>
                        <p class="py-md-4 fs-5">{{$about->section_3_description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-md-3 pb-3">
            <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
                <div class="container text-center">
                    <div class="col-md-6 mx-auto">
                        <h1>{{$about->section_4_title}}</h1>
                        <p class="py-md-4 fs-5">{{$about->section_4_description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pe-md-3 pb-3">
                @if ($about->section_4_img)
                    <img src="{{asset ('uploads/image/'. $about->section_4_img)}}" class="d-block w-100 h-100" alt="">
                @else
                    <img src="img/about-mid3.jpg" class="d-block w-100 h-100">
                @endif
            </div>
        </div>

        <div class="row mb-md-3 pb-3">
            <div class="col-md-6 pe-md-3 pb-3">
                  @if ($about->section_5_img)
                      <img src="{{asset ('uploads/image/'. $about->section_5_img)}}" class="d-block w-100 h-100" alt="">
                  @else
                      <img src="img/about-mid4.jpg" class="d-block w-100 h-100">
                  @endif
            </div>
            <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
                <div class="container text-center">
                    <div class="col-md-6 mx-auto">
                        <h1>{{$about->section_5_title}}</h1>
                        <p class="py-md-4 fs-5">{{$about->section_5_description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-md-3 pb-3">
            <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
                <div class="container text-center">
                    <div class="col-md-6 mx-auto">
                        <h1>{{$about->section_6_title}}</h1>
                        <p class="py-md-4 fs-5">{{$about->section_6_description}}</p>
                        <p class="fw-semibold fs-3 pb-md-5">020 3949 8800</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pe-md-3 pb-3">
                @if ($about->section_6_img)
                    <img src="{{asset ('uploads/image/'. $about->section_6_img)}}" class="d-block w-100 h-100" alt="">
                @else
                    <img src="img/about-mid5.jpg" class="d-block w-100 h-100">
                @endif
            </div>
        </div>
    </section>




    <section class="menu py-md-5 col-text">
        <div class="container py-md-3 text-center">
            <h1>{{$about->section_7_title}}</h1>
            <p class="py-md-4 fs-5">{{$about->section_7_description}}</p>
        </div>
    </section>


@endsection