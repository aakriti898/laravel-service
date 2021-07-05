<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SERVICES</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <!-- Style CSS -->
    <link rel="stylesheet" href={{asset("/css/available.css")}}>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>


<?php 
$title='plumber';
$p1=array('name'=>'Eran', 'occupation'=>'Plumber', 'id'=>1, 'img'=>'/img/l1.jpg');
$p2=array('name'=>'Joul', 'occupation'=>'Plumber', 'id'=>2,'img'=>'/img/l2.jfif');
$p3=array('name'=>'Jack', 'occupation'=>'Plumber', 'id'=>3,'img'=>'/img/l3.jpg');
$p4=array('name'=>'Jen', 'occupation'=>'Plumber', 'id'=>4,'img'=>'/img/l4.jpg');
$p5=array('name'=>'Eve', 'occupation'=>'Plumber', 'id'=>5,'img'=>'/img/l5.jpg');
$p6=array('name'=>'Ulrich', 'occupation'=>'Plumber', 'id'=>6,'img'=>'/img/l6.jpg');


$people=array($p1,$p2,$p3,$p4,$p5,$p6);
?>
<body>

    <div  class="container my-2">
        <div class="col-12 text-left py-4 my-4">
            <h1 class=" text-center topic pl-8">People Available</h1>
        </div>

        <!--PLUMBER-->

<div  class="container my-5">
    <section id="blog1">
        <div class="container mb-5 pb-3">
            <div class="title">
                <h1 class="text-success pl-8">{{$title}}</h1>

            </div>
            <div class="row">
                @for($i=0; $i<sizeof($people); $i++)
                <div class="col-md-2">
                    <div class="card ">
                        <img src="{{$people[$i]['img']}}" alt="" class="card-img-top zoom">
                        <div class="card-body">
                            <a href="#" class="card-title text-dark ">Name:{{$people[$i]['name']}}</a><br>
                            <small class="content">{{$people[$i]['occupation']}}</small> <br>    
                            <button class="button1 btn btn-muted btn-outline-none"><a class="text-danger"
                                    href="http://127.0.0.1:8000/detail/{{$people[$i]['name']}}">SEE
                                    MORE</a></button>
                        </div>
                    </div>
                </div>
                @endfor

            </div>

            <br>




    </section>

</body>
</html>