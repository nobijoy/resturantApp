@extends('master.front.master')
@section('title')
    Booking
    @endsection

    @section('body')




          <div class="banner ">
            <img src="img/menu-hero.jpg" class="d-block w-100 img-fluid" alt="...">
          </div>

<!-- Body Section -->

    <section class="menu py-md-5 my-md-5">
        <div class="container">
          <h1 class="text-center head-col fs-1 my-3">Main Menu</h1>
            <div class="text-center mt-md-5">
              <ul class="nav nav-pills mb-3 text-center justify-content-center d-flex" id="pills-tab" role="tablist">
                <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                  <button class="nav-link btn-menu active" id="pills-starter-tab" data-bs-toggle="pill" data-bs-target="#pills-starter" type="button" role="tab" aria-controls="pills-starter" aria-selected="true">
                    <p class="no-mb fw-semibold"><i class="fa-solid fa-cookie-bite"></i> STARTERS</p>
                  </button>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                  <button class="nav-link btn-menu" id="pills-main-tab" data-bs-toggle="pill" data-bs-target="#pills-main" type="button" role="tab" aria-controls="pills-main" aria-selected="false">
                    <p class="no-mb fw-semibold"><i class="fa-solid fa-bowl-rice"></i> MAINS</p>
                  </button>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                  <button class="nav-link btn-menu" id="pills-dessert-tab" data-bs-toggle="pill" data-bs-target="#pills-dessert" type="button" role="tab" aria-controls="pills-dessert" aria-selected="false">
                    <p class="no-mb fw-semibold"><i class="fa-solid fa-cheese"></i> DESSERTS</p>
                  </button>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                  <button class="nav-link btn-menu" id="pills-drink-tab" data-bs-toggle="pill" data-bs-target="#pills-drink" type="button" role="tab" aria-controls="pills-drink" aria-selected="false">
                    <p class="no-mb fw-semibold"><i class="fa-solid fa-wine-glass-empty"></i> DRINKS</p>
                  </button>
                </li>
                <li class="nav-item mx-sm-auto my-sm-2" role="presentation">
                  <button class="nav-link btn-menu" id="pills-kids-tab" data-bs-toggle="pill" data-bs-target="#pills-kids" type="button" role="tab" aria-controls="pills-kids" aria-selected="false">
                    <p class="no-mb fw-semibold"><i class="fa-solid fa-burger"></i> KIDS</p>
                  </button>
                </li>
              </ul>

              <div class="tab-content py-md-5 mx-auto" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-starter" role="tabpanel" aria-labelledby="pills-starter-tab">
                  <div class="row text-grey justify-content-center">
                    <div class="col-md-5 bg-container m-md-2 py-3">
                      <h1 class="py-2">Grill</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a class="menu-item newsweetalert" id=""><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 bg-container m-md-3 my-3">
                      <h1 class="py-2">CLASSIC PIZZAS</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row m-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2 ps-1">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


                <div class="tab-pane fade" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab">
                  <div class="row text-grey justify-content-center">
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">Grill</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">Grill</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab">
                  <div class="row text-grey justify-content-center">
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">DESSERTS</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">DESSERTS</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-drink" role="tabpanel" aria-labelledby="pills-drink-tab">
                  <div class="row text-grey justify-content-center">
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">SOFT DRINKS</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">HOT DRINKS</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-kids" role="tabpanel" aria-labelledby="pills-kids-tab">
                  <div class="row text-grey justify-content-center">
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">BURGER</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 bg-container m-md-3">
                      <h1 class="py-2">SANDWICH</h1>
                      <p class="py-2">With fries or mixed salad (sweet potato fries + £1)</p>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                      <div class="row p-md-2">
                        <div class="col-10 text-start">
                        <a  class="menu-item"><p>CLASSIC CHEESEBURGER</p></a>

                        <p>beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun</p>
                        </div>
                        <div class="col-2">
                          <h5 class="fw-semibold">£1.90</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
    </section>





<script type="text/javascript">
    $(document).ready(function(){
        $(".menu-item").click(function(){
            Swal.fire({
                title: 'CLASSIC CHEESEBURGER',
                text: 'beef patty, Monterey Jack cheese, burger sauce, lettuce, tomato in a brioche bun',
                imageUrl: '/img/modal-img1.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
        })
    })
</script>



    @endsection
