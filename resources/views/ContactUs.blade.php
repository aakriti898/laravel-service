@extends('default')

@section('body-content')
<div class="container">
    <div class="row" style="margin-top: 100px; margin-bottom:50px;">
      <div class="col-md-6 ">
        <h2>We'd Love To <br> <span class="text-success">
            <h1> Hear From You</h1>
          </span></h2>
        <p>Send us a message and we' ll respond as soon as possible</p>
        <form>
          <div class="form-group">
            <label for="exampleInputname1"></label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
              placeholder="Name*">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Email*">
          </div>

          <div class="form-group">
            <label for="exampleInputPhone1"></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone Number*">
          </div>

          <div class="form-group">
            <label for="exampleInputmessage1"></label>
            <textarea class="form-control py-5" id="exampleInputmessage1" placeholder="Message*"></textarea>
          </div>

          <button type="submit" class="btn btn-success">Send Message</button>
        </form>
      </div>

      <div class="col-md-6 d-flex flex-column pl-5 pt-5 contact" style="color:orange;">
        <div class="d-flex align-items-center">
          <div>
            <i class="fas fa-envelope fa-2x i1"></i>
          </div>
          <div class="ml-2 info">
            <a  href="#">ordernow.com.np</a>
            <br>
            <a href="#">info@ordernow.com.np</a>
          </div>
        </div>

        <div class="d-flex align-items-center mt-3">
          <div>
            <i class="fas fa-map-marker-alt fa-2x i2"></i>
          </div>
          <div class="ml-2 info">
            <p>Nogendra kanchha chowk, <br> Shantinagar, Kathmandu, <br> Nepal</p>
          </div>
        </div>


        <div class="d-flex align-items-center mt-3">
          <div>
            <i class="fas fa-phone-square-alt fa-2x i3"></i>
          </div>
          <div class="ml-2 info">
            <a href="#">+9779802302010, 01-4108461 </a>
          </div>
        </div>

        <div class="find-us text-center">
          <hr>
          <h2 class="text-success">Find us on:</h2>
          <span class="text-primary px-2"><i class="fab fa-facebook fa-2x"></i></span>
          <span class="text-warning "><i class="fab fa-instagram fa-2x"></i></span>
        </div>
      </div>

    </div>
  </div>
@endsection