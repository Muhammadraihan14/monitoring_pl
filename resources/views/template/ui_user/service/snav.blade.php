<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="asset/image/logo2.png" class="figure-img img-fluid rounded" alt="logo" width="80" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{url ('/home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url ('/about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url ('/service')}}">Our Service</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('/members')}}">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('/contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>