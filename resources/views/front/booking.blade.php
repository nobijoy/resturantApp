@extends('master.front.master')
@section('title')
    Booking
@endsection

@section('body')

    <div class="banner">
        <img src="img/booking-hero.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>



    <section class="booking col-text">
        <div class="container py-md-5">
            <div class="col-md-12 py-md-3 align-items-baseline">
                <div class="py-md-4 text-center">
                    <h1 class="fs-1">BOOK A TABLE</h1>
                    <p class="fw-semibold py-md-2 sub">Enjoy a family friendly bite to eat at Wildwood</p>
                </div>

                <div class="row w-100">
                    <div class="col-md-3 py-md-3 ms-md-auto">
                        <label for="location" class="form-label fw-semibold px-md-3">RESTAURANT</label>
                        <select class="form-select btn-rounded w-100" id="location">
                            <option selected>Select Location</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Chittagong</option>
                            <option value="3">Khulna</option>
                            <option value="4">Barishal</option>
                            <option value="5">Rajshahi</option>
                            <option value="6">Sylhet</option>
                        </select>
                    </div>

                    <div class="col-md-3 py-md-3 me-md-auto">
                        <label for="date" class="form-label fw-semibold px-md-3">Date</label>
                        <input type="date" class="btn-rounded w-100" id="birthday" name="date">
                    </div>

                </div>

                <div class="row w-100 py-3">
                    <div class="col-md-3 py-md-3 ms-md-auto">
                        <label for="person" class="form-label fw-semibold px-md-3">No. of Person</label>
                        <select class="form-select btn-rounded w-100" id="person">
                            <option selected>Choose</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">Large Group</option>
                        </select>
                    </div>

                    <div class="col-md-3 py-md-3 me-md-auto">
                        <label for="time" class="form-label fw-semibold px-md-3">TIME</label>
                        <input type="time" class="btn-rounded w-100" id="birthday" name="time">
                    </div>

                </div>

                <div class="row w-100 align-content-center d-flex">
                    <div class="col-md-3 py-md-3 mx-auto">
                        <button class="btn-rounded w-100">Check</button>
                    </div>

                </div>

            </div>
        </div>
    </section>




@endsection

