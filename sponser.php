<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/s.css">
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
    <div class="container row bread">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item "><a href="eligibilty.php">Eligibility</a></li>
            <li class="breadcrumb-item active">Sponsor</li>
            <li class="breadcrumb-item "><a href="app.php">Appointment</a></li>
        </ol>
    </div>


    <div class="row bg-img" style="background-image: url(images/one.jpg);">
        <div class="col-sm-6 bg text-white ">
            <center>
                <h3>Sponsor A life</h3>
            </center>
            <br>

            “To become a better you, remember to be grateful to people who have contributed
            to making you who you are today.” “When you see someone on top, look away
            and don't try to bring him down, because he may someday help you reach the top.”

        </div>
        <div class="col-sm-6 bg-dark">
            <center>
                <h1> Sponsorship Form</h1>
            </center>
            <div class="row form">
                <form action="" method="post">
                    <div class="form-group row ">
                        <label class="col-form-label  offset-md-3 col-md-6" for="firstname">
                            <center>First Name</center>
                        </label>
                        <div class="offset-md-3 col-md-6">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>

                        </div>
                        <label class="col-form-label offset-md-3 col-md-6" for="lastname">
                            <center>Last Name</center>
                        </label>
                        <div class="offset-md-3 col-md-6">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                        </div>

                        <label class="col-form-label offset-md-3 col-md-6" for="email">
                            <center>Email</center>
                        </label>
                        <div class="offset-md-3 col-md-6">
                            <input type="text" class="form-control" id="email" name="email" placeholder=" Enter Email" required>
                        </div>
                        <label class="col-form-label offset-md-3 col-md-6" for="address">
                            <center>Address</center>
                        </label>
                        <div class="offset-md-3 offset-md-3 col-md-6">
                            <input type="text" class="form-control" id="address" name="address" placeholder=" Enter Address" required>
                        </div>

                        <label class="col-form-label offset-md-3 col-md-6" for="orphange">
                            <center>Orphanage</center>
                        </label>
                        <div class="offset-md-3 col-md-6">
                            <input type="text" class="form-control" id="orphan" name="orphan" placeholder="Enter Orphange Name" required>
                        </div>

                        <label class="col-form-label offset-md-3 col-md-6" for="no">
                            <center>Enter No Of Children: </center>
                        </label>
                        <div class="offset-md-3 col-md-6">
                            <input type="number" class="form-control" id="no" name="no" required>
                        </div>


                        <img src="images/monthly.jpeg" class="o offset-md-3 col-md-3" alt="">

                        <img src="images/year.jpeg" class="o col-md-3" alt="">
                        <div class="offset-md-4 col-md-3">
                            <input type="checkbox" value="INR7000" name="monthly" class="btn-check sr-only" id="btn-check-2">
                            <label class="btn btn-primary to" for="btn-check-2">INR7000</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" value="INR84000" month="yearly" class="btn-check sr-only" id="btn-check-2">
                            <label class="btn btn-primary to" for="btn-check-2">INR84000</label>
                        </div>
                    </div>
                    <center> <button type="submit" name="submit" class="btn btn-success btn-lg"> Sponsor Now
            </div>
            </center>


            </form>
        </div>

    </div>
    </div>




    <div class="footer " data-background="" style="jbackground-color: #1c1919;">
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
</script>

</html>
<?php
if(isset($_POST['submit']))
{
  
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$address=$_POST['address'];
$orphan=$_POST['orphan'];
$no=$_POST['no'];
$monthly=$_POST['monthly'];
$yearly=$_POST['yearly'];



$query="INSERT INTO sponser (firstname,lastname,email,address,orphan,no,monthly,yearly) VALUES ('$firstname','$lastname','$email','$address','$orphan','$no','$monthly','$yearly')";

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