<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEW_ServiceLayout</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href={{asset('/css/bootstrap.min.css')}}>
    <!-- Style CSS -->
    <link rel="stylesheet" href={{asset('/css/style.css')}}>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/108fa96efa.js" crossorigin="anonymous"></script>

    @section('slick')
        
    @show 

  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/ordernow.png" alt=""></a>
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item">
                <a class="nav-link active mr-3" aria-current="page" href="http://127.0.0.1:8000/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="http://127.0.0.1:8000/AboutUs">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="http://127.0.0.1:8000/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="http://127.0.0.1:8000/faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-3" href="http://127.0.0.1:8000/privacy">Privacy Policy</a>
              </li>
  
              <li class="dropdown">
                <div>
                  <a href="#" class="nav-link mr-3"><span><i class="fas fa-user text-primary"></i></span></a>
                  <div class="dropdown-content">
                    <a type="button" class="btn text-dark" data-toggle="modal" data-target="#login">Login </a>
                    <a type="button" class="btn text-dark" data-toggle="modal" data-target="#register">Register </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      @section('body-content')
          
      @show 

<!--FOOTER-->
<footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <img src="img/ordernow.png" alt="" class="pb-2">
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique
            illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This website is made with
            <span> OrderNow</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h2 class="text-light">Footer Links</h2>

          <a href="index.html" class="footer-link"><i class="fas fa-angle-double-right"></i> Home</a> <br>
          <a href="AboutUs.html" class="footer-link"><i class="fas fa-angle-double-right"></i> About Us</a> <br>
          <a href="faq.html" class="footer-link"><i class="fas fa-angle-double-right"></i> FAQ</a> <br>
          <a href="privacy.html" class="footer-link"><i class="fas fa-angle-double-right"></i> Privacy Policy</a>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light ">
            <a href="#" class="icon"> <i class="fab fa-facebook-f "></i></a>
            <a href="#" class="icon"> <i class="fab fa-instagram "></i></a>
            <a href="#" class="icon"> <i class="fab fa-twitter "></i></a>
            <a href="#" class="icon"> <i class="fab fa-youtube "></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  @section('slick-js')
  @show 

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
  crossorigin="anonymous"></script>

<!-- Script Source Files -->

<!-- jQuery -->
<script src={{asset("/js/jquery-3.5.1.min.js")}}></script>
<!-- Bootstrap 4.5 JS -->
<script src={{asset("/js/bootstrap.min.js")}}></script>
<!-- Popper JS -->
<script src={{asset("/js/popper.min.js")}}></script>
<!-- Font Awesome -->
<script src={{asset("/js/all.min.js")}}></script>

  </body>
</html>
