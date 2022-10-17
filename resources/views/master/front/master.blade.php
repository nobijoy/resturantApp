<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/menu.css')}}">
    <style>
        .menu-img1{
            background-image: url("{{ asset('/img/lowerSection1.jpg') }}");
        /*background-image: url(/img/lowerSection1.jpg) ;*/
        background-repeat: no-repeat;
            background-size: cover;
            height: 60vh;
            width: 100vw;
            overflow: hidden;
        }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-dark navbar-expand-lg nav-in px-md-3 py-md-4">
    <div class="container-fluid px-md-5">
        <a class="navbar-brand" href="{{route('home')}}">
            <h1>WILDWOOD</h1>
            <h6 class="text-center">PIZZA PASTA GRILL</h6>
        </a>
        <button class="navbar-toggler btn-rounded text-white m-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa fa-bars nav-link round-border bg-nav"></i>
        </button>

        <div class="collapse navbar-collapse " id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('menus')}}">MENUS</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('restaurantList')}}">RESTURANT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('about')}}">ABOUT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-white" href="{{route('contact')}}">CONTACT</a>
                </li>

                <li class="nav-item px-3 bg-nav">
                    <a class="nav-link text-dark" href="{{route('booking')}}">BOOKING</a>
                </li>
                <li class="nav-item pt-1 px-3">
                    <i class="fa fa-bars nav-link round-border text-white"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Banner Image  -->
@yield('body')



<!-- Footer -->


<footer class="pt-md-3">
    <div class="container my-3 p-4 ">
        <div class="col-sm-12 col-green">
            <div class="row text-center">
                <div class="col-sm-3 py-3">
                    <h3>EAT</h3>
                    <ul class="list-group">
                        <li>
                            <a href="" class="col-green">Book a Table</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Menus</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Allergens</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Restaurants</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Take Away</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 py-3">
                    <h3>ENJOY</h3>
                    <ul class="list-group">
                        <li>
                            <a href="" class="col-green">Lunch menu</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Cinema Club</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Gift Vouchers</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Party Booking</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Christmas</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 py-3">
                    <h3>US</h3>
                    <ul class="list-group">
                        <li>
                            <a href="" class="col-green">About</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Careers</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Mystery Diners</a>
                        </li>
                        <li>
                            <a href="" class="col-green">News & Events</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 py-3">
                    <h3>HELP</h3>
                    <ul class="list-group">
                        <li>
                            <a href="" class="col-green">Feedback</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Cancel Booking</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Help & Advice</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Contact</a>
                        </li>
                        <li>
                            <a href="" class="col-green">Frequently Asked Question</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="icons p-4 text-center fs-3">
            <a href="" class="">
                <span><i class="fab fa-facebook col-green mx-3"></i></span>
            </a>
            <a href="">
                <span><i class="fab fa-whatsapp col-green mx-3"></i></span>
            </a>
            <a href="">
                <span><i class="fab fa-instagram col-green mx-3"></i></span>
            </a>
            <a href="">
                <span><i class="fab fa-twitter col-green mx-3"></i></span>

            </a>
        </div>
    </div>
</footer>


<!-- Copyright section -->


<div class="copyright pb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <a href="" class="col-green">© 2022 Wildwood</a>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="col-green">Terms & Conditions</a>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="col-green">Privacy Policy</a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="" class="col-green">Website By <span class="fw-bold">NextWave</span> </a>
                </div>

            </div>
        </div>

    </div>
</div>



<script src="{{asset('/')}}js/jquery-3.6.1.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
<script src="{{asset('/')}}js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.35/sweetalert2.all.min.js"></script>


</body>

</html>
