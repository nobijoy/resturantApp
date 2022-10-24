@extends('master.front.master')
@section('title')
Restaurants
@endsection

@section('body')
<div class="banner">
    @if ($respage->cover_img)
        <img src="{{ asset('uploads/image/'.$respage->cover_img)}}" class="d-block w-100 img-fluid" alt="...">
    @else
        <img src="img/resturant-hero.jpg" class="d-block w-100 img-fluid" alt="...">
    @endif
</div>




<!-- Body section -->



<section class="resturants col-text">
    <div class="container py-md-5">
        <div class="col-md-12 py-md-3 text-center align-items-baseline">
            <div class="py-md-4">
                <h1 class="fs-1">{{$respage->title}}</h1>
                <p class="fw-semibold py-md-2 sub">WE HAVE OVER {{count($restaurants)}} RESTAURANTS</p>
                <div class="justify-content-center py-md-3">
                  @if (sizeof($restaurants) > 0)
                  <p class="fw-semibold">FIND A RESTAURANT</p>
                  <select class="form-select btn-rounded w-50 my-3 text-center" id="">
                    <option selected>Select</option>
                    @foreach ($restaurants as $type)
                    <option value="{{$type->name}}">{{$type->name}}</option>
                    @endforeach
                  </select>
                  @endif
                </div>
            </div>

            <div class="container py-md-5">
                <div class=" row">
                    <ul class="nav mb-3 text-center justify-content-center d-flex">
                      @if (sizeof($areas) > 0)
                        <li class="nav-item mx-sm-auto my-sm-2">
                            <a href="">
                                <button class="nav-link btn-menu fw-semibold" id="">All</button>
                            </a>
                        </li>
                        @foreach ($areas as $type)
                        <li class="nav-item mx-sm-auto my-sm-2">
                            <a href="#{{$type->title}}">
                                <button class="nav-link btn-menu fw-semibold" id="">{{$type->title}}</button>
                            </a>
                        </li>
                        @endforeach
                      @endif
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>



<section class="locations col-text">
    <div class="container">
      @if (sizeof($areas) > 0)
        @foreach ($areas as $type)
            @php
                $areaRestautants = $restaurants->where('area_id', $type->id);
            @endphp
            @if (sizeof($areaRestautants) > 0)
            <div class="row" id="{{$type->id}}">
                <h1>{{$type->title}}</h1>
                @foreach ($areaRestautants as $ares)
                <div class="col-md-3 my-md-3">
                    <div class="card menu-img">
                        <img src="{{ asset('uploads/image/'.$ares->cover_img)}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5>{{$ares->name}}</h5>
                            <p class="card-text">{{mb_strimwidth($ares->short_note, 0, 110, '...')}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        @endforeach
      @endif
    </div>
</section>




@endsection