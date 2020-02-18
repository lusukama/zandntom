@extends('layauts.main')
@section('content')
<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Fast Food  Restaurant</strong></h2>
      <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
        optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit sed qui, dolorum!
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> Make Order Now</a>
    </div>
  </div>
</div>
<!-- container  -->
<section id="our-branches">
  <div class="container justify-content">
    <div class="page-header" id="branche">
      <h1 class="text-center text-dark text-uppercase my-4 display-4">our branches restaurant</h1>
    </div>
    <div class="row">
      <div class="col-md-4">
        <figure class="figure">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
          alt="Meet2Meat restaurant in Edenvale" style="width: 460px">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
          <h3 class="my-2">Meet2Meat Edenvale</h3>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="figure">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
          alt="Shaka's Cuisine Boksburg restaurant" style="width: 460px">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
          <h3 class="my-2">Shaka's Cuisine Boksburg</h3>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="figure">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(73).jpg" class="figure-img img-fluid z-depth-1"
          alt="Shaka Cuisine Braamfortein" style="width: 460px">
          <figcaption class="figure-caption">A caption for the above image.</figcaption>
          <h3 class="my-2">Shaka's Braamfortein</h3>
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
          <h4 class="my-3">Order now</h4>
          <p class="lead">Best african fast restaurant foods</p>
        </div>
        <div class="col-md-4">
          <!-- button -->
          <button class="btn  btn-primary btn-lg btn-cta"type="button" name="button">Order Now</button>
        </div>
    </div>
  </div>
</section>
@endsection
