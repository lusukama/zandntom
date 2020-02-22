<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand h4-responsive" href="#">food<span class="text-white text-uppercase coat">coat</span></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/restaurant')}}">Our Restaurants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create ')}}">Add New Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact')}}">Contact Us</a>
      </li>
    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
