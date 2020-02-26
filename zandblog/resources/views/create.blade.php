@extends('layauts.main')
@section('content')
<section id="create">
<div class="container">
  <h1 class="display-4 my-4 text-center text-dark">Create Order</h1>
  <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('/store')}}" method="POST">
    <p class="h4 mb-4">Add Order Now</p>
    <div class="form-row mb-4">
        <div class="col">
            <!-- ID -->
            <input type="number" id="defaultRegisterFormFirstName" class="form-control" name="" placeholder="Food ID">
        </div>
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="foodName" placeholder="Food Name">
        </div>
    </div>
    <!-- Price -->
    <input type="number" id="defaultRegisterPhonePassword" class="form-control" name="price" placeholder="Food Price" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <!-- place order Now -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Order Now</button>
</form>
<!-- Default form register -->
</div>
</section>
@endsection
