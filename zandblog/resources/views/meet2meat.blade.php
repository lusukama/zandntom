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
<!-- <section style="padding:80px 0;">
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
</section> -->
<!-- whyUs -->
  <section id="whyUs" class="section section-lg bg-gradient-default contactUs" style="padding:80px 0;">
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-dark titleColor h2-responsive">Why Choose Us</h2>
          </div>
        </div>
        <div class="row row-grid mt-5">
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white  rounded-circle text-primary">
              <i class="fa fa-desktop text-primary"></i>
            </div>
            <h5 class="text-dark  titleColor h5-responsive">Quality</h5>
            <p class="text-dark mt-3">We offer various options in regards to providing quality food(s) for your priceless celebrations.</p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white  rounded-circle text-primary">
              <i class="fa fa-pencil text-primary"></i>
            </div>
            <h5 class="text-dark  titleColor">Deversification</h5>
            <p class="text-dark mt-3">We provide exceptional food for such priceless moments in ones life...</p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white  rounded-circle text-primary">
              <i class="fa fa-tablet text-primary"></i>
            </div>
            <h5 class="text-dark  titleColor h5-responsive">Our Commitment</h5>
            <p class="text-dark mt-3">Our stuff are friendly and genuine, the give 100% commitment to making sure the customers are taken care of.</p>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300 pb-5">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1 h4-responsive">Want to Order ?</h4>
                <div class="form-group mt-4">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Your name" type="text" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input class="form-control" placeholder="Your Phone Number" type="tel" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-inbox"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email address" type="email" required />
                  </div>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                </div>
                <div>
                  <button type="button" class="btn btn-default btn-round btn-block btn-lg btnTalk">Send Order</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow mt-5">
                <div class="justify-content-center mt-5">
                  <h4 class="text-center h4-responsive mb-3">Our Contact Details</h4>
                  <p class="lead text-center mb-5"> 51 Vootstreck street Edenvale Mall
                  <br/> Telephone: +27796855739 <br />
                  Email: info@foodcoat.co.za <br />
                  Website: www.foodcoat.co.za
                </div>
            </div>
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection
