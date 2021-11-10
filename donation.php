<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="icon" href="images/title.jpg" type="image/x-icon">
    <style>
    .pr {
        margin: 50px;
        position: relative;
    }

    .pl {
        position: relative;
        left: 40px;

    }

    .pp {
        position: relative;
        right: 20px;
    }

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
    </style>
</head>

<body>
    <div class=" top-bar">
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

                                    <p class="m"> <a class="c" href="mailto:19c018@aiktc.ac.in">19co18.aiktc.ac.in</a>
                                    </p>

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
                    <a class="nav-link" href="first.php">
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
            <div class="navbar-text">

            </div>

            <span class="  navbar-text ">

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



    <div class="mar">
        <marquee behavior="" direction="">“What counts in life is not the mere fact that we have lived. It is
            what
            difference we have made to the lives of others
            that will determine the significance of the life we lead.”
        </marquee>
    </div>

    <div class="container">
        <center>
            <h3 style="margin:50px 0 50px 0 ;">Donate for the Basic rights of the Orphans</h3>
        </center>
        <div class="container-fluid  row  ">

            <div class="flip-box col-12 col-md-4">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="images1/money.jpeg" id="img1" alt="Mission">
                        <h3 class="ani">Donate Money</h3>
                    </div>
                    <div class="flip-box-back">
                        <h2 class="ani">"DONT DELAY GIVE TODAY"</h2>
                        <p>Donate money as a charity or responsibility. Your donations will be helpful for the
                            development and livelihood of the orphan children. May be you donate little amount but
                            this amount will be very beneficial and helpfull for children.We will be very greatfull
                            for your donations.</p>
                    </div>
                </div>
                <a href="#Donate-money">
                    <center><button id="buttons" class="Button-2 btn btn-primary">Donate Money</button></center>
                </a>
            </div>
            <div class="flip-box col-12 col-md-4">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="images1/food.jpg" id="img1" alt="Mission">
                        <h2 class="ani">Donate Food</h2>
                    </div>
                    <div class="flip-box-back">
                        <h3 class="ani">"FEED THE NEEDY ONE'S"</h3>
                        <p>Donate food for these needy one's may be it's cooked or raw. Just donate the food. Either
                            wasting the food you can donate and feed the orphans. But before donating must ensure
                            the food quality. Even if you are donating you can't donate anything.For us food quality
                            is our preference rather than quantity. So ensure it before donating. </p>
                    </div>
                </div>
                <a href="#donate-food">
                    <center><button id="buttons" class=" btn btn-primary">Donate Food</button></center>
                </a>
            </div>
            <div class="flip-box col-12 col-md-4">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="images1/cloth.jpeg" id="img1" alt="Mission">
                        <h2 class="ani">Donate Clothes</h2>
                    </div>
                    <div class="flip-box-back">
                        <h3 class="ani">"CHARITY IS PRIORITY"</h3>
                        <p>Donate clothes for these childrens may be it's used or new or old. Just donate for them.
                            You can buy more clothes or your family will buy clothes for you but these childrens
                            don't have family nor they have money. So please donate. But Clothes should be descent
                            and goods. So clothes quality should be good and well enough for the chilren to wear.
                            You can donate warm clothes or normal just donate. </p>
                    </div>
                </div>
                <a href="#donate-cloth">
                    <center><button class="button-3 btn btn-primary" id="buttons">Donate Clothes</button></center>
                </a>
            </div>
        </div>

        <strong>
            <hr class="body-hr">
        </strong>
        <div class="main ">
            <div class="container row one">


                <div class="row row-content align-items-center content-css mb">

                    <div class="col col-sm order-lg-first col-lg">
                        <div class="media">
                            <img class="d-flex mr-3 img-thumbnail align-self-center Mission" src="images1/donate-money-logo.jpg" alt="Mission"
                                height="80px" width="80px;">

                            <div class="media-body ">


                                <p class="fixed1" style="font-weight: bold;">Donate Money for the welfare of the lone souls. Your
                                    donations will be used for the Hospitality, Education and all the
                                    required things for these needy childrens. "Don't Delay Give Today"</p>
                            </div>
                        </div>

                    </div>
                </div>

                <form action="" id="Donate-money" class="col-12  col-md-8">
                    <center>
                        <h2>Money Donation</h2>
                    </center>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsum eaque eius qui dicta vero sint provident recusandae
                        fugit praesentium at earum maxime aperiam optio, eos ipsam minima tempore officia.
                    </p>
                    <!-- <hr class="headhr">
                    <h3>Kindly fill the form to donate: </h3>
                    <hr class="headhr"> -->
                    <!-- <div class="form-group row">
                        <label for="name" class="col-form-label col-6">Enter your Full Name : </label>
                        <input type="text" class="control-form col-6" name="name">
                    </div>
                    <div class="form-group row">
                        <label for="Email" class="col-form-label col-6">Enter your Email-Id :&nbsp; </label>
                        <input type="email" class="control-form col-6" name="email"><br>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-form-label col-6">Enter your Contact No :</label>
                        <input type="text" class="control-form col-6" name="contact"><br>
                    </div>
                    <div class="form-group row"> -->
                    <!-- <label for="donation" class="col-form-label col-6">Enter the Donation-amount : </label>
            <input type="number" class="control-form col-6" name="donation"> -->

                    <!-- </div> -->
                    <!-- <div class="form-group row">
            <label for="payment" class="col-6 col-form-label">Select Payment Method : </label>
            <input type="radio" class="col-1" name="method">
            <label for="method" class="col-1 col-form-label">Credit</label>
            <input type="radio" class="col-1" name="method">
            <label for="method" class="col-1 col-form-label"> Debit</label>
            <input type="radio" class="col-1" name="method">
            <label for="method" class="col-1  col-form-label"> UPI</label>
          </div> -->
                    <center> <a class="btn btn-warning col-4 offset-4 custom-btn" href="index1.php">Rozarpay</a>
                    </center>
                </form>

                <div class="left-slide col-12  col-md-4">
                    <div id="carouselExampleControls " class="carousel slide cal" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block " src="images1/money-donation1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Donate and help the children </h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block  " src="images1/money-donation2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Donation money is used for the welfare of the orphans</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block " src="images1/money-donation3.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Donate as a Responsibility or Charity</h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>

            </div>




            <div class="container row two">

                <div class="row row-content align-items-center content-css mb">

                    <div class="col col-sm order-lg-first col-lg">
                        <div class="media">
                            <img class="d-flex mr-3 img-thumbnail align-self-center Mission" src="images1/donate-food-logo.jpg" alt="Mission"
                                height="80px" width="80px;">

                            <div class="media-body ">


                                <p class="fixed1" style="font-weight: bold;">Donate for the orphans and feed them. Feed them either
                                    donating donating cooked food packets or raw food. It's better to
                                    feed rather than wasting the food. "Feed the Needy One's"</p>
                            </div>
                        </div>

                    </div>
                </div>

                <form action="row.php" method="post" id="donate-food" class="col-12  col-md-8">
                    <center>
                        <h1>COOKED FOOD DONATION</h1>
                    </center>
                    <hr class="headhr">
                    <h2>Kindly fill the form to donate: </h2>
                    <hr class="headhr">
                    <div class="btn-group" role="group">
                        <a href="donation.php" type="button" class="btn btn-primary">Raw</a>
                        <a href="cooked food dontation.php" type="button" class="btn btn-secondary"> Cooked</a>
                    </div>
                    <div class="form-group row">
                        <label for="donar name" class="col-form-label col-6">Enter the Donar's Name : </label>
                        <input type="text" name="donators_name" class="control-form col-6" placeholder="Enter the Donar's Name">
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-form-label col-6" name="donar email">Enter your Email-Id :
                        </label>
                        <input type="email" class="control-form col-6" name="email" placeholder="Enter your Email-Id ">
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-form-label col-6" name="contact no">Enter your Contact Number :
                        </label>
                        <input type="text" class="control-form col-6" name="contact" placeholder="Enter your Contact No">
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-form-label col-6" name="City">Enter your City Name : </label>
                        <input type="text" class="control-form col-6" name="city" placeholder="Enter your City Name">
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-form-label col-6" name="address">Enter your address : </label>
                        <input type="text" class="control-form col-6" name="address" placeholder="Enter your Address">
                    </div>
                    <label for="packets">Select the number of packets to donate : </label><br>
                    <div class="range-wrap">
                        <div class="range-value" id="rangeV"></div>
                        <input id="range" type="range" min="1" max="100" value="1" step="1">
                    </div><br>

                    <div class="form-group row">
                        <div class="col-6"><label for="name" class="col-form-label">Food Items:</label>
                            <p></p>
                        </div>
                        <div class="col-6">
                            <input class="control-form " name="list" type="text" id="namef" placeholder="Enter the Name of  row Food items "
                                autocomplete="off">
                            <P></P>
                        </div>
                    </div>


                    <p></p>
                    <label class="container1">
                        <input type="checkbox" id="myCheck" onclick="display()"> Do you Need Packets to Pack Food ?
                        <span class="checkmark"></span>
                    </label>
                    <label id="label" style="display: none;">Number of Packets : </label>
                    <input type="text" id="text" style="display:none" placeholder="Enter the number of Packets"></input>
                    <p></p>
                    <label class="container1">
                        <input type="checkbox">I Agree to all the terms & conditions & hereby confirm that all the
                        information
                        provided by me is correct .
                        <span class="checkmark"></span>
                    </label>
                    <br>
                    <p class="btn btn-primary" onclick="getLocation()">Location</p>

                    <p id="demo" name="locatio"></p>

                    <center><button name="submit14" class="btn btn-warning col-4 offset-4 custom-btn">Submit</button>
                    </center>

                </form>

                <div class="left-slide col-12  col-md-4">
                    <div id="carouselExampleControls " class="carousel slide cal" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block " src="images1/food-donation1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Enter the qunatity of Raw food for donations</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block  " src="images1/food-donation2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Pack the food and feed the children rather than wasting</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block " src="images1/food-donation3.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Distribute the food to the needy.</h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>

            </div>


            <div class="container row three">


                <div class="row row-content align-items-center content-css mb">

                    <div class="col col-sm order-lg-first col-lg">
                        <div class="media">
                            <img class="d-flex mr-3 img-thumbnail align-self-center Mission" src="images1/donate-cloth-logo.jpg" alt="Mission"
                                height="80px" width="80px;">

                            <div class="media-body ">


                                <p class="fixed1" style="font-weight: bold;">Donate Clothes for our childrens may be clothes are not
                                    good for you but for children your clothes can have a second
                                    chance. Donate Clothes in good condition and help the orphans. May be it is winter clothes or normal.
                                    "Charity is
                                    Prioty"</p>
                            </div>
                        </div>

                    </div>
                </div>


                <form action="" id="donate-cloth" class="col-12  col-md-8" method="post">
                    <center>
                        <h2>Cloth Donation</h2>
                    </center>
                    <hr class="headhr">
                    <h3>Kindly fill the form to donate: </h3>
                    <hr class="headhr">

                    <div class="form-group row">
                        <label for="name" class="col-form-label col-6">Enter your Full Name : </label>
                        <input type="text" class="control-form col-6" name="name">
                    </div>
                    <div class="form-group row">
                        <label for="Email" class="col-form-label col-6">Enter your Email-Id :&nbsp; </label>
                        <input type="email" class="control-form col-6" name="email"><br>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-form-label col-6">Enter your Contact No :</label>
                        <input type="text" class="control-form col-6" name="contact"><br>
                    </div>
                    <div class="form-group row">
                        <label for="donation" class="col-form-label col-6">Enter the Cloth Quantity :</label>
                        <input type="number" name="quantity" class="control-form col-6"><br>
                    </div>
                    <div class="form-group row">
                        <label for="cloth-gen" class="col-form-label col-6">Donating Cloth for : </label>
                        <input type="radio" value="girl" class="control-form col-1" name="clothgen">
                        <label for="girl" class="col-form-label col-2">Girl</label>
                        <input type="radio" value="boy" class="control-form col-1" name="clothgen">
                        <label for="boy" class="col-form-label col-2">Boy</label>
                    </div>


                    <center><button type="submit" name="submit3" class="btn btn-warning col-4 offset-4 custom-btn">Submit</button></center>
                </form>

                <div class="left-slide col-12  col-md-4">
                    <div id="carouselExampleControls " class="carousel slide cal" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block " src="images1/cloth-donation1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Give your clothes a Second Chance.</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block  " src="images1/cloth-donation2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Donate the warm clothes for the children.</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block " src="images1/cloth-donation3.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text">Pack the clothes and volunteer will reach for recieving donations.</h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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
                            <p style="color: white;">CHARITY 4 CAUSE is one of the system that will provide a platform
                                where
                                users
                                can
                                book an appointment to visit the orphanage, Donate the things, Sponsor and even
                                paperwork
                                procedures
                                online for the Adoption. <a href="about-us.php"><i class="fa fa-angle-right"></i> Read
                                    More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-item">
                            <div class="footer-title">
                                DONATE US
                            </div>
                            <p style="color: white;">Support us in our efforts to implement long-term, sustainable
                                initiatives to
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
                                    Add: Plot No. 2 & 3, Near Thana Naka, Khanda Gaon, New Panvel, Navi Mumbai,
                                    Maharashtra
                                    410206<br>
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


</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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


var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
}
</script>

</html>
<?php
if(isset($_POST['submit3']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$quantity=$_POST['quantity'];
$clothgen=$_POST['clothgen'];



$query="INSERT INTO cloth (name,email,contact,quantity,clothgen) VALUES ('$name','$email','$contact','$quantity','$clothgen')";

$data=mysqli_query($connection,$query);
if($data)
  {
    echo '
    <script> 
    alert("succesfully done!");
    window.location = "index.php";
    </script>
    ';
  //echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($connection);
  }


}

?>