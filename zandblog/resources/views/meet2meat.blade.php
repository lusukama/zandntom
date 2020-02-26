@extends('layauts.main')
@section('content')
<div class="jumbotron card card-image" style="background-image: url(public/images/banner-meet2meat2.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div class="overlay">
      <h2 class="card-title h2-responsive pt-3 mb-5 font-bold text-uppercase "><strong>Meet2Meat <small>so nice, so we meet again</small></strong></h2>
      <a href="{{ url('/restaurant')}}" class="btn btn-outline btn-md btn-order"><i class="fas fa-clone left"></i> Make Order Now</a>
    </div>
  </div>
</div>
@if(session('successMsg'))
  <div class="alert alert-success" role="alert">
    {{ session('successMsg')}}
  </div>
@endif
<!-- container  -->
<section id="our-branches">
  <div class="container justify-content">
    <div class="page-header" id="branche">
      <h2 class="text-center text-dark text-uppercase my-4 display-4 h2-responsive"><span class="colorBlue">our</span> branches</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <figure class="figure">
          <img src="public/images/services/beef-meat.jpg" class="figure-img img-fluid z-depth-1"
          alt="Meet2Meat restaurant in Edenvale" style="width: 460px">
          <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
          <h3 class="my-2 h3-responsive">Meet2Meat Edenvale</h3>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="figure">
          <img src="public/images/services/breakfast.jpg" class="figure-img img-fluid z-depth-1"
          alt="Shaka's Cuisine Boksburg restaurant" style="width: 460px">
          <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
          <h3 class="my-2 h3-responsive">Shaka's Cuisine Boksburg</h3>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="figure">
          <img src="public/images/services/burgers.jpg" class="figure-img img-fluid z-depth-1"
          alt="Shaka Cuisine Braamfortein" style="width: 460px">
          <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
          <h3 class="my-2 h3-responsive">Shaka's Braamfortein</h3>
        </figure>
      </div>
    </div>
  </div>
</section>
<!-- call to action -->
<section id="cta">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <!-- conten -->
          <h4 class="my-3 h4-responsive text-capitalize" style="color: #FFFF04;">Order now</h4>
          <p class="lead">Best african fast restaurant foods</p>
        </div>
        <div class="col-md-4">
          <!-- button -->
          <a class="btn  btn-primary btn-lg btn-cta"type="button" name="button" href="{{ url('/restaurant')}}">Order Now</a>
        </div>
    </div>
  </div>
</section>
<!-- add gallery  -->
<section style="padding:80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="view">
          <img src="public/images/foods/mogodu-african-food-500px.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-teal-strong">
          <p class="white-text h4-responsive">Shaka's Menu</p>
          <ul class="menuShaka">
            <li type="square" class="h5-responsive">Mogodu</li>
            <li type="square" class="h5-responsive">Chicken</li>
            <li type="square" class="h5-responsive">Breakfast</li>
            <li type="square" class="h5-responsive">Meal</li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view">
          <img src="public/images/foods/ready-plate-to-eat-500px.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-teal-strong">
          <p class="white-text h4-responsive">Meet2Meat's Menu</p>
          <ul class="meet2meatMenu">
            <li type="square" class="h5-responsive">Beef</li>
            <li type="square" class="h5-responsive">Chicken</li>
            <li type="square" class="h5-responsive">Braai</li>
            <li type="square" class="h5-responsive">Others</li>
          </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view">
          <img src="public/images/foods/steak-500px.jpg" class="img-fluid" alt="placeholder">
          <div class="mask flex-center waves-effect waves-light rgba-teal-strong">
          <p class="h4-responsive Shaka">Shaka Braamfortein</p>
          <ul class="menuShaka Braamfortein">
            <li type="square" class="h5-responsive">Burger</li>
            <li type="square" class="h5-reserved">Beef & Pap</li>
            <li type="square" class="h5-responsive">Breakfast</li>
            <li type="square" class="h5-responsive">Catering</li>
          </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
