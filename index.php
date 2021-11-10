<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity4cause</title>
    <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/title.jpg" type="image/x-icon">
    <!-- endbuild -->

    <style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }


    /*----  Main Style  ----*/
    #cards_landscape_wrap-2 {
        text-align: center;
        background-image: url(https://escozulchile.cl/wp-content/uploads/2018/07/wallpapereclweb.jpeg);

    }

    #cards_landscape_wrap-2 .container {
        padding-top: 80px;
        padding-bottom: 100px;

    }

    #cards_landscape_wrap-2 a {
        text-decoration: none;
        outline: none;
    }

    #cards_landscape_wrap-2 .card-flyer {
        border-radius: 5px;
        border: 2.5px solid black;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box {
        background: #ffffff;
        overflow: hidden;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;

    }

    #cards_landscape_wrap-2 .card-flyer .image-box img {
        -webkit-transition: all .9s ease;
        -moz-transition: all .9s ease;
        -o-transition: all .9s ease;
        -ms-transition: all .9s ease;
        width: 100%;
        height: 200px;

    }

    #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
        opacity: 0.7;
        -webkit-transform: scale(1.15);
        -moz-transform: scale(1.15);
        -ms-transform: scale(1.15);
        -o-transform: scale(1.15);
        transform: scale(1.15);
    }

    #cards_landscape_wrap-2 .card-flyer .text-box {
        text-align: center;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
        padding: 30px 18px;
    }

    #cards_landscape_wrap-2 .card-flyer {
        background: #ffffff;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0 10px 14px navy;
    }

    #cards_landscape_wrap-2 .card-flyer:hover {
        background: rgb(255, 255, 255);
        box-shadow: 0px 15px 40px rgb(87, 87, 240);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box p {
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box h6 {
        margin-top: 0px;
        margin-bottom: 4px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #00acc1;
    }

    .top {
        display: grid;
        grid-template-columns: auto auto auto;
        grid-gap: 0px 30px;

    }

    .center {
        display: grid;
        grid-template-columns: 490px 490px;
        grid-gap: 0px 30px;
        justify-content: center;
    }

    .flip-box {
        background-color: transparent;

        height: 400px;
        border: 4px solid black;
        border-radius: 50px;
        perspective: 1000px;
        overflow: hidden;

    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;

    }

    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);

    }

    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;

    }

    .flip-box-front {
        background-color: #e1f0f8;
        color: black;
    }

    .flip-box-back {
        background-color: #99ddff;
        color: white;
        transform: rotateY(180deg);
    }
    </style>
</head>


<body>

    <!-- <div class=" container-fliud top">
  <div class="">
    <p class="m"> <a class="c" href="mailto:19c018@aiktc.ac.in">Email:19co18.aiktc.ac.in</a></p>
  </div>
  <div class="">
    <p class="m">Call us:-8452635478</p>
  </div>
  <div class="">
    <div class="social">

      <a class="btn btn-social-icon btn-facebook" href=" #"><i class="fa fa-facebook "></i></a>
      <a class="btn btn-social-icon btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
      <a class="btn btn-social-icon btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
      <a class="btn btn-social-icon btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
    </div>

  </div>

  </div> -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <h1>Orphanage Management <center class="system">System</center>
                            </h1>

                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p>+91 8594002419</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>

                                    <p class="m"> <a class="c" href="mailto:19c018@aiktc.ac.in">19co18.aiktc.ac.in</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-expand-lg  d-md-flex sticky-top">
    <div class="container row">
      <a class="navbar-brand" href="#">
        <h2>Orphanage Management System <h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <a class="btn btn-primary" aria-label="Skip to main navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
      </button>

      <div class="collapse navbar-collapse  justify-content-between" id="navbarNav">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <p class="p">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p class="p">Adoption</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p class="p">Volunteer</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p class="p">DonateNow</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p class="p">Contactus</p>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <button class=" btn">Donate</button>
        </ul>
      </div>

    </div>
  </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top ">
        <a class="navbar-brand mr-auto" href="#"><img src="images/mlogo.jpg" alt="" height="70" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">

            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">
                        <p class="p">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a type="button" class=" nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                        <p class="p">Adoption</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#volunteer">
                        <p class="p">Volunteer</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donation.php">
                        <p class="p">DonateNow</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus/index.php">
                        <p class="p">Contactus</p>
                    </a>
                </li>
            </ul>
            <span class="  navbar-text ">
                <div class="text-center">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="trigger-btn" data-toggle="modal"><img src="images/avatar.jpg" alt="" height="80px" width="80px"> </a>
                </div>
            </span>
            <span class="navbar-text ">
                <div class="ml-auto">
                    <a class="btn btn-custom" href="index1.php">Donate</a>
                </div>
            </span>
        </div>
    </nav>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row pp">
                        <div class="col-4">
                            <img src="images/e.jpeg" class="pl" alt="" height="100px" width="100px">
                            <a href="eligibilty.php" class=" pr btn btn-danger">Eligibility </a>

                        </div>
                        <div class="col-4">
                            <img src="images/s.jpeg" class="pl" alt="" height="100px" width="100px">
                            <a href="sponser.php" class="pr btn btn-danger">Sponsor </a>

                        </div>
                        <div class="col-4">
                            <img src="images/a.jpeg" class="pl" alt="" height="100px" width="100px">
                            <a href="app.php" class=" pr btn btn-danger">calender </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/avtar.jpeg" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Member Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-btn">Login as User</button>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block login-btn" id="signin">Login as Admin</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="images/avtar.jpeg" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Admin Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="admin/admin/dist/index.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username1" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mar">
        <marquee behavior="" direction="">“What counts in life is not the mere fact that we have lived. It is
            what
            difference we have made to the lives of others
            that will determine the significance of the life we lead.”
        </marquee>
    </div>
    <div class="container-fluid">
        <div class="row row-content">
            <div class="col-12">
                <div class="carousel slide carousel-fade " id="mycarousel" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid w-100" src="images/slider1.jpeg" alt="slide1">
                            <div class="carousel-caption d-none d-md-block ">
                                <div class="ch">
                                    <h1 class="chw">WELCOME TO THE FAMILY</h1>
                                    _________________________________________________<br>
                                    We are glad to have you here!
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid w-100" src="images/slider3.jpeg" alt="slide2">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid w-100" src="images/slider4.jpg" alt="slide4">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a href="#mycarousel" role="button" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon">
                        </span></a>
                    <a href="#mycarousel" role="button" class="carousel-control-next" data-slide="next"><span
                            class="carousel-control-next-icon"></span></a>

                </div>
            </div>
        </div>
    </div>



    <div class="container shift-down">

        <h1 class="">Welcome to orphanage and donation management system </h1>

        <div class="media-body-d">

            <div class="row row-content ">
                <div class="col-12 col-md-6">
                    <p class="style">OUR ORGANIZATION<br><br>
                        In the heart of every child is a hunger for home. Not just for food and a place
                        to sleep, but for safety and community. Most importantly: for love. We are much more than a home for
                        children from difficult and desperate circumstances.

                        <br><br>We are a family, where love guides us all as we grow and expand year after year. Not just a
                        regular
                        children’s
                        home, we
                        are a nearly self-sustaining organization; a working farm, a vibrant school, receiving no government
                        assistance of any
                        kind. Take a look around and if you have any questions just get in contact with us via the menu above!
                    </p>
                </div>
                <div class="col-12  col-md-6 ">
                    <div class="flip-box ml-auto">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <div class="card i">
                                    <img class="card-img-top " src="images/logo.jpg" alt="logo" height="220" width="150">
                                    <div class="card-body h ">
                                        <h1>Donate Online</h1>
                                        <p class="logoc">Help us to keep making these kids live special by donating online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-box-back">
                                <h3 class="bg-dark">
                                    Be a part of the family.
                                </h3>
                                <p class="fbt">We are working on 5 rights of the orphans we request everyone to come forward and support
                                    this little
                                    angels. Support
                                    them even its small for them but it can make a big difference in their lives. Think this 5 rights as a
                                    responsibility or
                                    may be as a charity. Just be a helping hands and make the present and future brighter for this
                                    childrens.</p>
                                <br>
                                <a href="donation.php" type="button" class="btn btn-outline-dark btn-lg fbb">Give Now</a>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="row row-content align-items-center content-css">

                <div class="col col-sm order-lg-first col-lg">
                    <div class="media">
                        <img class="d-flex mr-3 img-thumbnail align-self-center Mission" src="images/mission.jpeg" alt="Mission" height="180px"
                            width="200px;">

                        <div class="media-body">

                            <h2 class="mt-0">Our Mission </h2>
                            <p class="fixed1">Mainstreaming the Orphan, Semi Orphan and Street children in the national building by
                                providing care, support & protection through shelter, food, and education is our mission.providing basic
                                needs to children's for food, shelter, and clothing when parents were either dead or absent. As society
                                progressed, it accepted a responsibility to provide financial support to parents as a way to keep
                                children with their
                                families. </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row row-content align-items-center content-css">

                <div class="col col-sm order-lg-first col-lg">
                    <div class="media">


                        <div class="media-body">

                            <h2 class="mt-0">Our Vision</h2>
                            <p class="fixed1 ">To implement a community-involved effort to care for orphaned, abandoned and
                                vulnerable
                                babies
                                and young children. To use local resources and seek to become self-reliant in energy and food. To strive
                                to relocate children into their family units. To provide training in the care of infants for mothers and
                                carers.</p>
                        </div>
                        <img class="d-flex mr-3 img-thumbnail align-self-center Vision" src="images/vision.jpeg" alt="Vision" height="180px"
                            width="200px">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr class="new1">
    <div class="container ">
        <p class="">
            <center>
                <h1 class="spacing">Our 5 Rights<br>

                </h1>

        </p>
        <p class="">Things which are must for the orphans are divided up to so we called it "5 Rights". These
            things
            are
            essential and must
            for every needy child. The motive of these rights is to support the orphan childs. Having these rights childrens
            can
            have a bright and everyone can support them and not make them lonely. Whatever we do is for childrens. So please
            support
            them for their sake.</p>
        </center>
    </div>
    <div id="cards_landscape_wrap-2">

        <div class="container bgm ">

            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class=" mb-4 box-shadow">

                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img class="card-img-top" src="images/education.jpeg" alt="Card image cap" height="300" width="300">
                                </div>
                                <div class="card-body bg">
                                    <center><big>
                                            <h4 class="ani">Education is must to all!</h4>
                                        </big></center>
                                    <p class="card-text ">&quot;Everyone has the right to education. Education shall be directed
                                        to the
                                        full
                                        development of the human personality and
                                        to the strengthening of respect for human rights and fundamental freedoms.&quot;</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4 box-shadow">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img class="card-img-top" src="images/food.jpg" alt="Card image cap" height="300" width="300">
                                    <div class="card-body bg1">
                                        <center><big>
                                                <h4 class="ani">Feed the needy ones.</h4>
                                            </big></center>
                                        <p class="card-text">&quot;Donating food to the
                                            worthy people or organizations helps counter poverty, hunger and at the same time, it can
                                            improve
                                            harmony, friendliness,
                                            and trust among residents.&quot;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-4 box-shadow">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img class="card-img-top" src="images/money.jpeg" alt="Card image cap" height="300" width="300">
                                    <div class="card-body bg2">
                                        <center><big>
                                                <h4 class="ani">Don’t delay give today</h4>
                                            </big></center>
                                        <p class="card-text">&quot;Donating Money to the orphans is another great form of charity to
                                            support the
                                            needyone 's around the globe. Donate to
                                            replenish their livelihood &quot;</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class=" mb-4 box-shadow cloth">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img class="card-img-top" src="images/cloth.jpeg" alt="Card image cap" height="300" width="300">
                                    <div class="card-body bg3">
                                        <center><big>
                                                <h4 class="ani">Charity is Priority</h4>
                                            </big></center>
                                        <p class="card-text">"Doing a good deed like donating your old clothes will make you feel good
                                            because
                                            you're doing something for a worthy
                                            cause. You're getting rid of the clutter in your home and helping others at the same time."</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-4 box-shadow vol">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img class="card-img-top" src="images/volunteer.jpeg" alt="Card image cap" height="300" width="300">
                                    <div class="card-body bg4">
                                        <div class="title">
                                            <h4 class="ani">Be a Volunteer</h4>
                                        </div>
                                        <p class="card-text">"Volunteering at orphanages is another way of contributing. By
                                            donating time
                                            instead
                                            of money to an orphanage in India,
                                            you can provide love, care, affection, warmth and education to the orphans that require them the
                                            most.
                                            "</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class=" volsection  container-fluid " id="volunteer">

        <div class="voltext">
            <p>
                LOOKING TO VOLUNTEER?

            </p>

            <p>
            <h3 style="color: #FF1E56; font-weight:bolder">SEE HOW YOU CAN MAKE A DIFFERENCE</h3>

            </p>

        </div>

        <center>
            <div class="row volsection  container d-flex justify-content-around align-items-center ">
                <div class="col-12 col-sm-4 step-1">
                    <a href="first.php"><img
                            src="https://www.thebalancesmb.com/thmb/GTodENoVVM08s1cdKEtfkPe_ulo=/2122x1194/smart/filters:no_upscale()/volunteersignup-07490626323b4568bcabcd7425091e62.jpg"
                            alt="" class="img-fluid d"></a>

                    <span class="first">First Step</span>

                    Learn what it means to volunteer with us. Check out our page Life As A Volunteer
                </div>

                <div class="col-12 col-sm-4  ">
                    <a href="second.php"><img
                            src="https://www.parentmap.com/sites/default/files/styles/1180x660_scaled_cropped/public/2021-02/iStock-1265552601.jpg?itok=RJ6cBGvm"
                            alt="" class="img-fluid d"></a>

                    <span class="second">Second Step</span>
                    Read our Frequently Asked Questions page for answers to all of your concerns.
                </div>
                <div class="col-12 col-sm-4  ">
                    <a href="third.php"><img src="https://post.healthline.com/wp-content/uploads/2020/09/080516_volunteering_THUMB_LARGE-1200x628.jpg"
                            alt="" class="img-fluid d"></a>

                    <span class="third">Third Step</span>
                    Apply To Volunteer via our online form. It’s quick and easy to do.
                </div>

            </div>
        </center>
        <center>
            <a href="third.php"><button style="width: 195px; color:#000000;" class="btn-vol btn btn-custom">Apply
                    to
                    Volunteer</button></a>
        </center>

    </div>


    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p style="font-weight: bolder;">Meet Our Team</p>
                <h2>Our Engineers & Workers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/coder4.jpeg" alt="Team Image" height="270px">
                        </div>
                        <div class="team-text">
                            <h2>Azad Ansari</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/coder3.jpeg" alt="Team Image" height="270px">
                        </div>
                        <div class="team-text">
                            <h2>Harish Khan</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/zahra.jpeg" alt="Team Image" height="270px">
                        </div>
                        <div class="team-text">
                            <h2>Zahra Sayed</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/pooja.jpeg" alt="Team Image" height="270px">
                        </div>
                        <div class="team-text">
                            <h2>Pooja Rathod</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="footer " data-background="" style="    background-color: #1c1919;">
        <div class="content-wrap2">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-4">

                        <div class="footer-item">
                            <div class="footer-title">About Us</div>
                            <p style="color: white;">CHARITY 4 CAUSE is one of the system that will provide a platform where users
                                can
                                book an appointment to visit the orphanage, Donate the things, Sponsor and even paperwork procedures
                                online for the Adoption. <a href="about-us.php"><i class="fa fa-angle-right"></i> Read More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-item">
                            <div class="footer-title">
                                DONATE US
                            </div>
                            <p style="color: white;">Support us in our efforts to implement long-term, sustainable initiatives to
                                help
                                disable Senior Citizens through all the stages of their lives. </p>
                            <div class="btn-overlay">
                                <a href="donate.php" class="btn btn-primary">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-item">
                            <div class="footer-title">
                                CONTACT US
                            </div>
                            <div class="textwidget">
                                <p style="color: white;">
                                    CHARITY 4 CAUSE ORPHANAGE<br>
                                    Add: Plot No. 2 & 3, Near Thana Naka, Khanda Gaon, New Panvel, Navi Mumbai, Maharashtra 410206<br>
                                    Phone: +91 8594002419<br>
                                    Email: <a href="mailto:19co18.aiktc.ac.in" target="_top" style="color: #ffffff;">info@charity4cause.org</a><br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="fcopy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="copyright">Website Designed By : <a href="http://www.saiwaytech.com/" target="_blank" style="color:yellow;">Group
                                3</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <!-- build:js js/main.js -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- endbuild -->
</body>
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".navbar").css("background", "white");

        } else {

            $(".navbar").css("background", "white");

        }
    })
})
$("#signin").on("click", function() {
    $('#myModal').modal('hide');
});
//trigger next modal
$("#signin").on("click", function() {
    $('#myModal1').modal('show');
});


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>






</html>