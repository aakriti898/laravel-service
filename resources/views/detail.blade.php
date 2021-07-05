<!DOCTYPE html>
<html lang="en">


<style>
    .about{
        background-color:rgb(247, 244, 244);
        margin: 30px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 50px 7px rgba(0, 0, 0, 0.1);
       
    }

    .zoom{
        height: 500px;
        width: 400px;
        object-fit: cover;
      align-items: center;
      
    }

.h1, p, h3{
    text-align: center;
}

.star{
    color: gold;
}

.info{
    background-color:whitesmoke;
    margin: 30px;
    padding-bottom: 20px;
    padding-top: 10px;
    box-shadow: 0 0 20px 7px rgba(0, 0, 0, 0.1);
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>ABOUT</title>
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href={{asset("/css/bootstrap.min.css")}}>
    <!-- Style CSS -->
    <link rel="stylesheet" href={{asset("/css/available.css")}}>

    <script src="https://kit.fontawesome.com/108fa96efa.js" crossorigin="anonymous"></script> 

</head>


<?php
$Name='Eran';
$Fname='Eran Green';
$Address= 'Sankhamool, Kathmandu';
$Email= 'eran312@mail.com';
$occupation= 'plumber';
$Contact= '+590000';
$Rating=5.0;
$img="/img/l1.jpg";
 ?>


<body>

<div class="container about">
    <div class="row"> 
        <div class="col-md-12 col-sm-1">
        <img src="{{$img}}" alt="" class=" profile">
        <h1 class="h1">Name: {{$Name}}</h1>
        <p class="p">{{$occupation}}</p>
        <h3 class="h3">Rating: {{$Rating}} <span class="star"><i class="fas fa-star "></i></span>
            <span class="star"><i class="fas fa-star "></i></span>
            <span class="star"><i class="fas fa-star"></i></span>
            <span class="star"><i class="fas fa-star "></i></span>
            <span class="star"><i class="fas fa-star"></i></span></h3>
    </div>

    </div>
</div>


<div class="container info">
    <div class="row"> 
        <div class="col-md-12 col-sm-1">
        <h1 class="h1"><u> User Profile</u></h1>
        <p class="p">Name: {{$Fname}} <br>
        Address: {{$Address}} <br>
    Contact info: {{$Contact}} <br>
Email: {{$Email}}</p>
    </div>
    </div>
</div>

<!--FORM-->
<div id="form" class="container text-center">
    
        <h1 class="text-success">Form for Service Booking</h1>
        
        <div class="row pt-4 form">
            <div class="col-lg-12">
                <form>
                    <div class="form-group py-2">
                        <h3 class="text-dark ">Name</h3>
                        <input type="text" class="form1" placeholder="Name">
                    </div>
 
                    <div class="form-group py-2">
                        <h3 class="text-dark ">Email</h3>
                        <input type="text" class="form1" placeholder="Email">
                    </div>

                    <div class="form-group py-2">
                        <h3 class="text-dark ">Time</h3>
                        <input type="text" class="form1" placeholder="Time">
                    </div>

                    <div class="form-group py-2">
                        <h3 class="text-dark ">Location</h3>
                        <input type="text" class="form1" placeholder="Add a Location">
                    </div>

                    <div class="form-group py-2">
                        <h3 class="text-dark ">Message</h3>
                        <textarea class="form1 outline-none py-3" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="button">Book Now</button>
            </div>
    </div>
</div>



</body>

</html>
