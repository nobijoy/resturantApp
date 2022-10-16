@extends('master.front.master')
@section('title')
    Booking
    @endsection

@section('body')




          <div class="banner">
            <img src="img/about.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>

    </head>


    <section class="menu py-md-5 col-text">
        <div class="container py-md-3 text-center">
          <h1 class="fs-1">ABOUT WILDWOOD</h1>
          <p class="py-md-4 fs-5 sub">At Wildwood, our aim is simple:<em> ‘A friendly team, serving great food, in a place where</br> you can feel at home’</em></p>
        </div>
    </section>


    <!-- mid section -->



    <section class="py-md-5">
      <img src="img/about-mid1.jpg" class="d-block w-100 img-fluid" alt="">
    </section>

    <section class="menu py-md-5">
      <div class="container py-md-3 text-center">
        <h1>VENUES</h1>
        <p class="fw-semibold py-md-2">WE CREATE EXPERIENCES FOR ALL OCCASIONS</p>
        <p class="py-md-4 fs-5">
          At Wildwood, we choose our venues carefully and we have a respect for the past. Our restaurants bring<br>
           beautiful buildings back to life whilst respecting the history of the town and the environment. Wherever<br>
           possible, we restore features back to their former glory, like the stunning tiles in the old Sainsbury’s grocery<br>
           dating back to the early 20th century, which is now a central feature in our Cheam restaurant.In Taunton, we<br>
           made sure that the landmark Market House (built in 1772) kept many of its original features, creating a truly<br>
            unique dining environment.
          </p>
          <div class="justify-content-center py-md-3">
            <p class="fw-semibold">FIND A RESTAURANT</p>
            <select class="form-select btn-rounded w-25 text-center" id="">
              <option selected>Select Location</option>
              <option value="1">Dhaka</option>
              <option value="2">Chittagong</option>
              <option value="3">Khulna</option>
              <option value="4">Barishal</option>
              <option value="5">Rajshahi</option>
              <option value="6">Sylhet</option>
            </select>

          </div>
      </div>
  </section>




<!-- Main divs collage -->


  <section class="main col-text">
    <div class="row mb-md-3 pb-3">
      <div class="col-md-6 pe-md-3 pb-3">
        <img src="img/about-mid2.jpg" class="d-block w-100 h-100">
      </div>
      <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
        <div class="container text-center">
          <div class="col-md-6 mx-auto">
            <h1>FOOD</h1>
            <p class="py-md-4 fs-5">Our well-balanced menu offers a wide grill selection and pizza and pasta dishes, as well as fresh salads, burgers, steaks, risottos and indulgent desserts from our own bakery in Ludlow. All produced using the best seasonal ingredients ensuring delicious food is served up every time</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-md-3 pb-3">
      <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
        <div class="container text-center">
          <div class="col-md-6 mx-auto">
            <h1>DRINKS</h1>
            <p class="py-md-4 fs-5">Our carefully chosen wine, beer and cider selection ensures that you will find the perfect match for your food. If you are in the party mood, you can enjoy our great selection of cocktails.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 pe-md-3 pb-3">
        <img src="img/about-mid3.jpg" class="d-block w-100 h-100">
      </div>
    </div>

    <div class="row mb-md-3 pb-3">
      <div class="col-md-6 pe-md-3 pb-3">
        <img src="img/about-mid4.jpg" class="d-block w-100 h-100">
      </div>
      <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
        <div class="container text-center">
          <div class="col-md-6 mx-auto">
            <h1>KIDS WELCOME</h1>
            <p class="py-md-4 fs-5">Little ones love our restaurants and the fun kids’ menu filled with age-appropriate activities and healthy food.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-md-3 pb-3">
      <div class="col-md-6 menu-con mb-3 align-items-center d-flex">
        <div class="container text-center">
          <div class="col-md-6 mx-auto">
            <h1>CELEBRATE</h1>
            <p class="py-md-4 fs-5">Planning a small party, a private dining experience or a full venue hire? We can create a tailor-made celebration for you. Call our Reservations Hotline on:</p>
            <p class="fw-semibold fs-3 pb-md-5">020 3949 8800</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 pe-md-3 pb-3">
        <img src="img/about-mid5.jpg" class="d-block w-100 h-100">
      </div>
    </div>
  </section>




  <section class="menu py-md-5 col-text">
    <div class="container py-md-3 text-center">
      <h1>A BRIEF HISTORY</h1>
      <p class="py-md-4 fs-5">It all started in 2004 when we created a new Mediterranean pizza, pasta and grill<br>
        concept. We collaborated with some exceptional chefs and operators to craft an eclectic <br>
        menu, combining traditional European dishes with the best comfort food. The first<br>
        Wildwood was opened in west London and today we have a collection of unique <br>
        restaurants in selected buildings and areas. We pride ourselves on quality – that’s both<br>
         food and service – always.</p>
    </div>
</section>


@endsection

