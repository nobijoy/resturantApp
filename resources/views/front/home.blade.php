@extends('master.front.master')
@section('title')
    Home
@endsection
@section('body')




    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"
         data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>

        </div>
        @if ($home->carousel)
            @php
                $allCarsel = explode(',', $home->carousel);
            @endphp
            <div class="carousel-inner">
                @foreach($allCarsel as $key=>$carsel)
                    <div @if($key == 0) class="carousel-item active" @else class="carousel-item" @endif>
                        <img src="{{ asset('uploads/image/'.$carsel)}}" class="d-block w-100 img-fluid" alt="...">
                    </div>
                @endforeach
            </div>
        @else
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bg2.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bg3.jpg" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bg4.jpg" class="img-fluid d-block w-100" alt="...">
                </div>
            </div>
        @endif
    </div>




    <!-- Main Content Area -->


    <div class="container py-md-5 my-md-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <div>
                    <h1 class="fs-1 lh-base head-col">High Quality</br> Food is our Passion</h1>
                    <p class="sub fw-semibold">WE ALWAYS SOURCE THE FINEST PRODUCTS</p>
                    <p class="sub-two">
                        Our well-balanced menu offers a wide grill selection and
                        provides something for everyone. All produced by using fresh
                        ingredients and serving up delicious food, every time. Including
                        pizza and pasta dishes, as well as fresh salads, burgers, steaks,
                        risottos and indulgent desserts from our own bakery in Ludlow.
                        Little ones love our restaurants and the fun kids’
                        menu filled with age appropriate activities and healthy food.
                    </p>
                    <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">
                        BOOK A TABLE
                    </button>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 ">
                @if ($home->section_2_img_1)
                    <img src="{{ asset('uploads/image/'.$home->section_2_img_1)}}" class="d-block w-100 h-100">
                @else
                    <img src="img/uppersection1.jpg" class="d-block w-100 h-100">
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                @if ($home->section_2_img_2)
                    <img src="{{ asset('uploads/image/'.$home->section_2_img_2)}}" class="d-grid w-100 h-100">
                @else
                    <img src="img/uppersection3.jpg" class="d-grid w-100 h-100">
                @endif
            </div>
            <div class="col-md-1 my-2"></div>
            <div class="col-md-5">
                @if ($home->section_2_img_3)
                    <img src="{{ asset('uploads/image/'.$home->section_2_img_3)}}" class="d-grid w-100 h-100">
                @else
                    <img src="img/uppersection2.jpg" class="d-grid w-100 h-100">
                @endif
            </div>
        </div>
    </div>


    <!-- Menu Section -->

    <section>
        <div class="pb-md-3">
            <div class="row mb-md-3 pb-3">
                <div class="col-md-8 pe-md-3 pb-3 text-center">
                    @if ($home->section_img_3)
                        <img src="{{ asset('uploads/image/'.$home->section_img_3)}}" class="d-grid w-100 h-100">
                    @else
                        <img src="img/menuSection2.jpg" class="d-grid w-100 h-100">
                    @endif
                    <!-- <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark">
                        Play
                      </button> -->
                </div>
                <div class="col-md-4 menu-con mb-3 align-items-center d-flex">
                    <div class="container text-center mx-md-auto ">
                        <h5 class="fs-6">FOOD & DRINK</h5>
                        <h1>MENU</h1>
                        <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">
                            VIEW MENU
                        </button>
                    </div>
                </div>
            </div>
            <div class="row pb-3 mb-md-3">
                <div class="col-md-4 menu-con mb-3 align-items-center d-flex">
                    <div class="container text-center mx-md-auto ">
                        <h5 class="fs-6">FIND YOUR NEAREST</h5>
                        <h1>RESTAURANT</h1>
                        <div class="justify-content-center">
                            <select class="form-select btn-rounded w-75 text-center" id="">
                                <option selected>Select Location</option>
                                <option value="1">Dhaka</option>
                                <option value="2">Chittagong</option>
                                <option value="3">Khulna</option>
                                <option value="4">Barishal</option>
                                <option value="5">Rajshahi</option>
                                <option value="6">Sylhet</option>
                            </select>


                            <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark text-wrap">
                                VIEW All
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 ps-md-3 pb-3">
                    @if ($home->section_img_4)
                        <img src="{{ asset('uploads/image/'.$home->section_img_4)}}" class="d-grid w-100 h-100">
                    @else
                        <img src="img/menuSection1.jpg" class="d-grid w-100 h-100">
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!-- Lower Section -->

    <section>
        <div class=" p-md-3 menu-img1 align-items-center d-flex">
            <div class="container text-center">
                <img src="img/lowerSection2.png" class="d-grid w-50 h-50 mx-auto">
                <button class="btn-rounded mx-auto my-2 fw-semibold btn text-dark">
                    BOOK A CELEBRATION
                </button>
            </div>

        </div>
    </section>


    <section class="py-5">
        <div class="container text-center col-green fw-bold">
            <h1>WILDWOOD NEWSLETTER</h1>
            <p>WE'LL KEEP YOU UPDATE WITH ALL THE LATEST NEWS & WILDWOOD PERKS!</p>
            <div class="mx-auto">
                <form class="row">
                    <div class="col-md-3">
                        <label for="newsform" class="form-label">First Name<span class="text-danger">*</span></label>
                        <input type="name" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-3">
                        <label for="newsform" class="form-label">Last Name<span class="text-danger">*</span></label>
                        <input type="name" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-4">
                        <label for="newsform" class="form-label">Email address<span class="text-danger">*</span></label>
                        <input type="email" class="form-control btn-rounded bg-white" id="newsform">
                    </div>
                    <div class="col-md-2 ms-0">
                        <button type="submit" class="btn btn-primary mt-4 btn-rounded fw-semibold">Add me</button>
                    </div>
                </form>
            </div>

        </div>
        </div>
    </section>








@endsection
