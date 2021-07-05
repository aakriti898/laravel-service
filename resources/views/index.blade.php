@extends('default')

{{--SlICK--}}
@section('slick')
 <!--slick carousel-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
 integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
 crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
 integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
 crossorigin="anonymous" />
 @endsection

{{--BODY--}}
@section('body-content')
<!--UP ARROW-->
<div class="up-arrow">
    <a href="#h1"><i class="fas fa-chevron-circle-up fa-2x"></i></a>
  </div>

  <!--MESSAGE-->
  <div class="message">
    <a type="button" class="btn text-dark" data-toggle="modal" data-toggle="tooltip" data-placement="top"
      title="Send a Message" data-target="#log"><i class="fas fa-comment-dots fa-2x"></i></a>
  </div>


  <!--BACKGROUND IMAGE-->
  <div id="h1" class="fixed-background">
    <div class="text-dark pt-3 ">
      <div class="container cont ">
        <h1 class="text-center h1">Home Services, on Demand.</h1>
        
        <!--SEARCH-->
        <form class="example" action="#" style="width:100%">
          <input type="text" placeholder="Search for a service " name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="container logo ">
          <div class="container ">
            <section id="blog">
              <div class="container mb-5 pb-3">
                <div class="row row-cols-3 row-cols-md-6">
                  <div class=" col">
                    <div class="card1 ">
                      <img src="img/web-development.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">

                        <a href="#developer" class="content1">Developer</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/cupping.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">

                        <a href="#salon" class="content1">Spa</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/electrician.svg" alt="" class="card-img-top zoom1 ">
                      <div class="card-body1">

                        <a href="#c-p" class="content1">Electrician</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/hairdresser.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">

                        <a href="#salon" class="content1">Salon for Women</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/janitor.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#c-p" class="content1">Cleaner</a> <br>

                      </div>
                    </div>
                  </div>


                  <div class="col">
                    <div class="card1 ">
                      <img src="img/painter.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#c-p" class="content1">Painter</a> <br>


                      </div>
                    </div>
                  </div>
                </div>

                <br>




                <div class="row row-cols-3 row-cols-md-6">
                  <div class="col">
                    <div class="card1">
                      <img src="img/photographer.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#p-v" class="content1">Photographer</a> <br>


                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/plumber.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">

                        <a href="#c-p" class="content1">Plumber</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1 ">
                      <img src="img/taxi-driver.svg" alt="" class="card-img-top zoom1 ">
                      <div class="card-body1">
                        <a href="#p-v" class="content1">Driver</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1">
                      <img src="img/carpenter.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#p-v" class="content1">Carpenter</a> <br>

                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card1">
                      <img src="img/multimedia.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#p-v" class="content1">Videographer</a> <br>

                      </div>
                    </div>
                  </div>


                  <div class="col">
                    <div class="card1 ">
                      <img src="img/salon.svg" alt="" class="card-img-top zoom1">
                      <div class="card-body1">
                        <a href="#salon" class="content1">Salon for Men</a> <br>

                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container work">
    <div class="text-left py-4 my-4">
      <h1 class="text-success text-center pl-8">How it works on a call?</h1>
    </div>
    <div class="row">
      <div class="col-md-8 col-6">
        <h3 class="topic">Describe the service</h3>
        <p class="text-dark">Choose from a variety of services and select the day and time you'd like a qualified
          expert to show
          up.
          Give us the details and we'll find you the help.</p>
      </div>
      <div class="col-md-4 col-6">
        <img src="img/call.png" alt="" class="w-100 img-work1">
      </div>
    </div>


    <div class="row ">
      <div class="col-md-4 col-6" style="height: 180px;">
        <img src="img/search.svg" alt="" class="w-100 img-work">
      </div>
      <div class="col-md-8 col-6 container-icon">
        <h3 class="topic">Get Matched</h3>
        <p class="text-dark">SMS will match you with the right professional according to your requirements.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-8 col-6">
        <h3 class="topic">Get it done</h3>
        <p class="text-dark">Just like that, our expert arrives and gets the job done. Pay after work completion.</p>
      </div>
      <div class="col-md-4 col-6" style="height: 180px;">
        <img src="img/hand-shake.svg" alt="" class="w-100 img-work">
      </div>
    </div>


    <div class="row">
      <div class="col-md-4 col-6" style="height: 180px;">
        <img src="img/relax.svg" alt="" class="w-100 img-work">
      </div>
      <div class="col-md-8 col-6">
        <h3 class="topic">Sit back and relax</h3>
        <p class="text-dark">30 days service warranty ensures your happiness and peace of mind. </p>
      </div>


    </div>

  </div>


  <!-- Image Carousel -->
  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <div class="carousel-caption">
      <div class="container">
        <div class="row justify-content-center">
          <div class="bg-custom">
            <h1>Do you want to be a Service Provider?</h1>
            <button type="button" class="btn button btn-lg py-1 text-light" data-toggle="modal"
              data-target="#service">Click Here </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Content -->
    <div class="carousel-inner ">

      <div class="carousel-item active">
        <img src="img/carousel/caro1.jfif" alt="" class="w-100">

      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro2.jfif" alt="" class="w-100">
      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro3.jfif" alt="" class="w-100">
      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro4.jpg" alt="" class="w-100">
      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro5.jpg" alt="" class="w-100">
      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro6.jpg" alt="" class="w-100">
      </div>

      <div class="carousel-item">
        <img src="img/carousel/caro7.jpg" alt="" class="w-100">
      </div>

    </div>

    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="fas fa-chevron-left fa-2x"></span></a>


    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="fas fa-chevron-right fa-2x"></span></a>

  </div>

  <!--Slick Carousel Images-->
  <section id="blogs">
    <div class="container mb-5 pb-3 mt-4">


      <div class="row slider mt-2 pt-2">
        <div class="col-md-12">

          <div class="card1 ">
            <img src="img/e.jpg" alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1 ">
            <img src="img/beauty.jpg" alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/v.jpg " alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/bike.png " alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/bab.jpg" alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/c.png " alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/photo.jpg " alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/plumber.jpg " alt="" class="card-img-top slick">
          </div>
        </div>

        <div class="col-md-12">
          <div class="card1">
            <img src="img/driver.png " alt="" class="card-img-top slick">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--CELANING AND PLUMBING-->
  <div class="container text-center">
    <div class="row my-5">
      <div class="col-12 text-left py-4 my-4">
        <h1 class="text-success text-center pl-8">Service Categories</h1>
        <hr>
        <h3 id="c-p" class="topic">Home Cleaning and Plumbing</h3>
      </div>

      <div class="row">
        <div class="col-md-3 my-2">
          <img src="img/plumbing.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="plumber.html" class="cat-text">Plumbing</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/home.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="plumber.html" class="cat-text">Home Cleaning</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/bathroom.jpg" alt="" class="w-100 cat-img"> <br>

          <a href="plumber.html" class="cat-text">Bathroom Cleaning</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/chair.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="plumber.html" class="cat-text">Office Chair Cleaning</a>

        </div>
      </div>

    </div>
  </div>

  <!--SALON SERVICE-->
  <div class="container text-center">
    <div class="row my-5">
      <div class="col-12 text-left py-4 my-4">
        <hr>
        <h3 id="salon" class="topic">Salon Services</h3>
      </div>

      <div class="row">
        <div class="col-md-3 my-2">
          <img src="img/women.jfif" alt="" class="w-100 cat-img"> <br>
          <a href="salon.html" class="cat-text">Salon for Women</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/men.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="salon.html" class="cat-text">Salon for Men</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/spa.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="salon.html" class="cat-text">Spa</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/mani.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="salon.html" class="cat-text">Manicure and Pedicure</a>

        </div>

      </div>
    </div>
  </div>

  <!--Photography and Videography-->
  <div class="container text-center">
    <div class="row my-5">
      <div class="col-12 text-left py-4 my-4">
        <hr>
        <h3 id="p-v" class="topic">Photography and Videography</h3>
      </div>

      <div class="row">
        <div class="col-md-3 my-2">
          <img src="img/wed.jfif" alt="" class="w-100 cat-img"> <br>
          <a href="photo.html" class="cat-text">Wedding Photographer</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/video.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="photo.html" class="cat-text">Videographer</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/wild.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="photo.html" class="cat-text">Wild Life Photographer</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/nature.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="photo.html" class="cat-text">Nature Shot</a>

        </div>

      </div>
    </div>
  </div>


  <!--Developer-->
  <div class="container text-center">
    <div class="row ">
      <div class="col-12 text-left py-4 my-4">
        <hr>
        <h3 id="developer" class="topic">Developer</h3>
      </div>

      <div class="row my-3">
        <div class="col-md-3 my-2">
          <img src="img/back.jfif" alt="" class="w-100 cat-img"> <br>
          <a href="developer.html" class="cat-text">Backend Developer</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/ux.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="developer.html" class="cat-text">UI/UX</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/front.jpg" alt="" class="w-100 cat-img"> <br>
          <a href="developer.html" class="cat-text">Frontend Developer</a>

        </div>

        <div class="col-md-3 my-2">
          <img src="img/designer.jpeg" alt="" class="w-100 cat-img"> <br>
          <a href="developer.html" class="cat-text">Designer</a>

        </div>

      </div>
    </div>
  </div>
  <br>

  <!--WHY CHOOSE US-->
  <div class="container choose-us py-3 pb-5">

    <div class="col-12 text-left py-4 my-4">
      <h1 class="text-success text-center pl-8">Why Choose Us?</h1>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <img src="img/technician.svg" alt="" class=" choose-img">
        <h3 class="topic1">Expert Technicians</h3>
        <p class="text-dark">Background checked and trained technicians</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="img/certificate.svg" alt="" class=" choose-img">
        <h3 class="topic1">Service Guarantee</h3>
        <p class="text-dark">30 days service guarantee in all our services</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="img/courier.svg" alt="" class=" choose-img">
        <h3 class="topic1">Hassle Free Service Delivery</h3>
        <p class="text-dark">Convenient and easy access to hassle free services</p>
      </div>
    </div>
  </div>

  <!--MODAL LOGIN-->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginLabel">Login</h5>
          <div class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-window-close fa-2x"></i></div>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="user-name" class="col-form-label">
                User Name:
              </label>
              <input type="text" class="form-control" id="user-name" />
            </div>
            <div class="mb-3">
              <label for="password" class="col-form-label">Password:</label>
              <input type="password" class="form-control" id="password" />
            </div>
            <div class="mb-3">
              <h5>Type:</h5>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Visitor
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Service Provider
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>


  <!--MODAL REGISTER-->
  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerLabel">Register</h5>
        <div class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-window-close fa-2x"></i></div></div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="user-name" class="col-form-label">
                User Name:
              </label>
              <input type="text" class="form-control" id="user-name" />
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="email" />
            </div>
            <div class="mb-3">
              <label for="password" class="col-form-label">Password:</label>
              <input type="password" class="form-control" id="password" />
            </div>
            <div class="mb-3">
              <label for="cpassword" class="col-form-label">Confirm Password:</label>
              <input type="password" class="form-control" id="cpassword" />
            </div>

          </form>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-primary">Sign in</button>
        </div>
      </div>
    </div>
  </div>


  <!--MODAL SERVICE PROVIDER-->
  <div class="modal fade" id="service" tabindex="-1" aria-labelledby="serviceLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="serviceLabel">Service Provider</h5>
      <div class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-window-close fa-2x"></i></div> </div>
        <div class="modal-body">
          <p>Form for Service Provider</p>
          <form>
            <div class="mb-3">
              <label for="name" class="col-form-label">
                Name:
              </label>
              <input type="text" class="form-control" id="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="email" />
            </div>
            <div class="mb-3">
              <label for="sub" class="col-form-label">Subject:</label>
              <input type="text" class="form-control" id="sub" />
            </div>
            <div class="mb-3">
              <label for="contact" class="col-form-label">Contact:</label>
              <input type="text" class="form-control" id="contact" />
            </div>
            <div class="mb-3">
              <label for="message" class="col-form-label">Message:</label>
              <textarea class="form-control py-3" placeholder="Message" id="message"></textarea>
            </div>

          </form>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!--MODAL MESSAGE-->
  <div class="modal fade" id="log" tabindex="-1" aria-labelledby="messageLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageLabel">Write a Message</h5>
        <div class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-window-close fa-2x"></i></div></div>
        <div class="modal-body">

          <form>
            <div class="mb-3">
              <label for="name" class="col-form-label">
                Name:
              </label>
              <input type="text" class="form-control" id="name" />
            </div>

            <div class="mb-3">
              <label for="message" class="col-form-label">Message:</label>
              <textarea class="form-control py-5" placeholder="Message" id="message"></textarea>
            </div>

          </form>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

@endsection


{{--SLICK-JS--}}
@section('slick-js')

  <!--SLICK CAROUSEL-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('.slider').slick({
      dots: true,
      autoplay: true,
      autplaySpeed: 3000,
      infinite: true,
      speed: 300,
      arrows: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });</script>

    @endsection