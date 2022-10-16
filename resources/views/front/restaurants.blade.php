@extends('master.front.master')
@section('title')
    Booking
    @endsection

    @section('body')



          <div class="banner">
            <img src="img/resturant-hero.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>




    <!-- Body section -->



    <section class="resturants col-text">
      <div class="container py-md-5">
        <div class="col-md-12 py-md-3 text-center align-items-baseline">
          <div class="py-md-4">
            <h1 class="fs-1">OUR RESTAURANTS</h1>
            <p class="fw-semibold py-md-2 sub">WE HAVE OVER 50 RESTAURANTS</p>
            <div class="justify-content-center py-md-3">
              <p class="fw-semibold">FIND A RESTAURANT</p>
              <select class="form-select btn-rounded w-50 my-3 text-center" id="">
                <option selected>Select</option>
                <option value="1">Dhaka</option>
                <option value="2">Chittagong</option>
                <option value="3">Khulna</option>
                <option value="4">Barishal</option>
                <option value="5">Rajshahi</option>
                <option value="6">Sylhet</option>
              </select>

            </div>
          </div>

          <div class="container py-md-5">
            <div class=" row">
              <ul class="nav mb-3 text-center justify-content-center d-flex">
                <li class="nav-item mx-sm-auto my-sm-2" >
                  <a href="">
                    <button class="nav-link btn-menu fw-semibold" id="">All</button>
                  </a>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2">
                  <a href="#dhaka">
                    <button class="nav-link btn-menu fw-semibold" id="">Dhaka</button>
                  </a>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2">
                  <a href="#chittagong">
                    <button class="nav-link btn-menu fw-semibold" id="">Chittagong</button>
                  </a>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2">
                  <a href="">
                    <button class="nav-link btn-menu fw-semibold" id="">Khulna</button>
                  </a>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2">
                  <a href="">
                    <button class="nav-link btn-menu fw-semibold" id="">Barishal</button>
                  </a>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2">
                  <a href="">
                    <button class="nav-link btn-menu fw-semibold" id="">Sylhet</button>
                  </a>
                </li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section>



    <section class="locations col-text">
      <div class="container">
        <div class="row" id="dhaka">
          <h1>Dhaka</h1>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card4.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card5.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="chittagong">
          <h1>Chittagong</h1>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card4.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 my-md-3">
            <div class="card menu-img">
              <img src="/img/card5.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5>Sultan's Dine</h5>
                <p class="card-text">Some quick example text</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    @endsection
