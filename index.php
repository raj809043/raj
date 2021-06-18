<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <style type="text/css">
    .carousel-item {
  height: 100vh;
  min-height: 300px;
}
.logo3{
  width: 150px;
  border-radius: 50%;
}
.carousel-caption {
  bottom: 220px;
}
.carousel-caption h5 {
  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 25px;
  font-family: merienda;
}
.carousel-caption p {
  width: 60%;
  margin: auto;
  font-size: 18px;
  line-height: 1.9;
  font-family: poppins;
}
.carousel-caption a {
  text-transform: uppercase;
  background: #262626;
  padding: 10px 30px;
  display: inline-block;
  color: #fff;
  margin-top: 15px;
}
.navbar-nav a {
  font-family: poppins;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: bold;
}
.navbar-light .navbar-brand {
  color: #fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 2px;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
  color: #fff;
}
.navbar-light .navbar-nav .nav-link {
  color: #fff;
}
.navbar-nav {
  text-align: center;
}
.nav-link {
  padding: .2rem 1rem;
}
.nav-link.active, .nav-link:focus {
  color: #fff;
}
.navbar-toggler {
  padding: 1px 5px;
  font-size: 18px;
  line-height: 0.3;
  background: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #fff;
}
.w-100 {
  height: 100vh;
}
@media only screen and (max-width: 767px) {
  .navbar-nav.ml-auto {
    background: rgba(0, 0, 0, 0.5);
  }
  .navbar-nav a {
    font-size: 14px;
    font-weight: normal;
  }
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="logo3" src="img/logo3.jpg"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutscho.php">Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Education.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
      <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
      <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img alt="First slide" class="d-block w-100" src="img/jkjk.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay: 1s">Education Development</h5>
          <p class="animated bounceInLeft" style="animation-delay: 2s">Education Is The Right-Birth OF Every Child.</p>
          <p class="animated bounceInRight" style="animation-delay: 3s"><a href="/Education">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img alt="Second slide" class="d-block w-100" src="img/19.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated slideInDown" style="animation-delay: 1s">Together we can stop child labour.</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s">Our Goal Is To Increase Equality Among All Children Whether They Are Poor Or Rich.</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="/child">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img alt="Third slide" class="d-block w-100" src="img/17.png">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s">Please Stop It</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s">We Give Smart And Digital Education To Children For Free.</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="/child">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img alt="Third slide" class="d-block w-100" src="img/18.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s">Digital Education</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s">All Children Necessary To Take Digital Education</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="Education">More Info</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img alt="Third slide" class="d-block w-100" src="img/rkk1.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s">We are Trying To Huge Changes</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s">Please Support R . Foundation, Your Support Make Huge Change In The World</p>
          <p class="animated zoomIn" style="animation-delay: 3s"><a href="/Education">More Info</a></p>
        </div>
      </div>
    </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
  </script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
  </script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
  </script>
</body>
</html>
