@extends('master.front.master')
@section('title')
    Contact
    @endsection

@section('body')


    <div class="banner">
        <img src="img/contact-hero.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>


    <section class="booking col-text">
        <div class="container py-md-5">
            <div class="col-md-12 py-md-3 align-items-baseline">
                <div class="py-md-4 text-center">
                    <h1 class="fs-1">GET IN TOUCH</h1>
                    <p class="fw-semibold py-md-2 sub">TAKE A MOMENT TO FILL OUT OUR CONTACT FORM AND LET US KNOW HOW WE'RE DOING. OUR OFFICE HOURS ARE <br>
                        MONDAY - FRIDAY 9AM-5PM.</p>
                </div>

                <div class="text-grey justify-content-center py-3">

                    <div class="row">
                        <div class="col-md-5 bg-container m-md-3 my-3">
                            <div class="card">
                                <img src="/img/card1.jpg" class="card-img-top py-3" alt="...">
                                <div class="card-body text-center">
                                    <h4>Our locations</h4>
                                    <p class="card-text py-md-2 fw-semibold">We Have Over 45 Locations. Find Your Nearest <br>Resturant</p>
                                    <a href="restaurants.blade.php">
                                        <button class="btn-rounded w-50 fw-semibold mb-md-5">Our Resturants</button>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 bg-container m-md-3 my-3">
                            <div class="card ">
                                <img src="/img/card1.jpg" class="card-img-top py-3" alt="...">
                                <div class="card-body text-center">
                                    <h4>Our locations</h4>
                                    <p class="card-text py-md-2 fw-semibold">We Have Over 45 Locations. Find Your Nearest <br>Resturant</p>
                                    <a href="restaurants.blade.php">
                                        <button class="btn-rounded w-50 fw-semibold mb-md-5">Our Resturants</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-md-5">
                        <div class="col-md-5 bg-container m-md-3 my-3">
                            <div class="card">
                                <img src="/img/card1.jpg" class="card-img-top py-3" alt="...">
                                <div class="card-body text-center">
                                    <h4>Our locations</h4>
                                    <p class="card-text py-md-2 fw-semibold">We Have Over 45 Locations. Find Your Nearest <br>Resturant</p>
                                    <a href="restaurants.blade.php">
                                        <button class="btn-rounded w-50 fw-semibold mb-md-5">Our Resturants</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 bg-container m-md-3 my-3">
                            <div class="card ">
                                <img src="/img/card1.jpg" class="card-img-top py-3" alt="...">
                                <div class="card-body text-center">
                                    <h4>Our locations</h4>
                                    <p class="card-text py-md-2 fw-semibold">We Have Over 45 Locations. Find Your Nearest <br>Resturant</p>
                                    <a href="restaurants.blade.php">
                                        <button class="btn-rounded w-50 fw-semibold mb-md-5">Our Resturants</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row py-md-5">

                    <div class="col-md-5 py-5">
                        <h1 class="">HEAD OFFICE</h1>
                        <div class="py-md-4">
                            <h5 class="fw-semibold">ADDRESS</h5>
                            <p class="py-md-1">32 Charlotte Street, London W1T 2NQ</p>
                        </div>
                        <div class="py-md-4">
                            <h5 class="fw-semibold">CUSTOMER CARE & ENQUIRIES</h5>
                            <p class="py-md-1">020 3949 8800</p>
                            <a href=""><p>customercare@tastyplc.co.uk</p></a>
                        </div>
                        <div class="py-md-4">
                            <h5 class="fw-semibold">RECRUITMENT</h5>
                            <p class="py-md-1">020 3757 7062</p>
                        </div>
                        <div class="py-md-4">
                            <h5 class="fw-semibold">ACCOUNTS</h5>
                            <p class="py-md-1">020 3757 7064</p>
                        </div>
                        <div class="py-md-4">
                            <h5 class="fw-semibold">020 3757 7064</h5>
                            <p class="py-md-1">0203 757 7060</p>
                        </div>

                    </div>

                    <div class="col-md-5">
                        <h1>SEND A MESSAGE</h1>
                        <div class="py-md-3">
                            <form action="">

                                <div class="mb-md-4">
                                    <label for="first_name" class="form-label fw-semibold px-md-3">FIRST NAME<span class="text-danger">*</span></label>
                                    <input type="name" class="btn-rounded w-100" id="" name="first_name">
                                </div>

                                <div class="my-md-4">
                                    <label for="last_name" class="form-label fw-semibold px-md-3">LAST NAME<span class="text-danger">*</span></label>
                                    <input type="name" class="btn-rounded w-100" id="" name="last_name">
                                </div>

                                <div class="my-md-4">
                                    <label for="email" class="form-label fw-semibold px-md-3">EMAIL ADDRESS<span class="text-danger">*</span></label>
                                    <input type="email" class="btn-rounded w-100" id="" name="email">
                                </div>

                                <div class="my-md-4">
                                    <label for="number" class="form-label fw-semibold px-md-3">TELEPHONE</label>
                                    <input type="number" class="btn-rounded w-100" id="" name="number">
                                </div>

                                <div class="my-md-4">
                                    <label for="time" class="form-label fw-semibold px-md-3">CHOOSE LOCATION</label>
                                    <select class="form-select btn-rounded w-100" id="">
                                        <option selected>Select Location</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Chittagong</option>
                                        <option value="3">Khulna</option>
                                        <option value="4">Barishal</option>
                                        <option value="5">Rajshahi</option>
                                        <option value="6">Sylhet</option>
                                    </select>
                                </div>

                                <div class="my-md-4">
                                    <label for="time" class="form-label fw-semibold px-md-3">WHAT'S YOUR ENQUIRY REGARDING?<span class="text-danger">*</span></label>
                                    <select class="form-select btn-rounded w-100" id="">
                                        <option selected>Select Location</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Chittagong</option>
                                        <option value="3">Khulna</option>
                                        <option value="4">Barishal</option>
                                        <option value="5">Rajshahi</option>
                                        <option value="6">Sylhet</option>
                                    </select>
                                </div>

                                <div class="my-md-4">
                                    <label for="textbox" class="form-label fw-semibold px-md-3">MESSAGE<span class="text-danger">*</span></label>
                                    <textarea type="text" class="btn-rounded w-100 h-100" id="" name="textbox" rows="5"></textarea>
                                </div>

                                <div class="my-md-4">

                                    <label for="usage"><input type="checkbox" id="usage" name="usage" value="usage"><strong> Usage of my personal data.</strong> The information you provide <br>may be stored by us to aid communication. <br>Please ensure you’ve read and understood our privacy policy<br> before you continue.</label>
                                </div>

                                <div class="my-md-4">

                                    <label for="signup"><input type="checkbox" id="signup" name="signup" value="signup"><strong> Sign-up for news from Wildwood.</strong> By checking the box above you are agreeing to receive email marketing communications from Wildwood from time to time. We will not share your details with any 3rd parties. Please review our Privacy Policy for more information.</label>
                                </div>

                                <div class="my-md-4">

                                    <label for="terms"><strong><input type="checkbox" id="terms" name="terms" value="terms"> I have read and accepted the restaurant's terms & conditions.</strong></label>
                                </div>

                                <div class="my-md-4">
                                    <button class="btn-rounded w-100 fw-semibold mb-md-5">Send Message</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>




            </div>
        </div>
    </section>





@endsection
