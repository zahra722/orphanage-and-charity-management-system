<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer | Third Step</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/vol3.css">
    <link rel="icon" href="images/title.jpg" type="image/x-icon" ">
</head>

<body>
    <div class=" top-bar ">
    <div class=" container">
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
            <li class="breadcrumb-item "><a href="./first.php">First Step</a></li>
            <li class="breadcrumb-item "><a href="./second.php">Second Step</a></li>
            <li class="breadcrumb-item active">Third Step</li>
        </ol>
        <div class="col-12">
            <h3>Third Step</h3>
            <hr>
        </div>
    </div>

    <center>
        <h1 id="h1">Apply To Volunteer</h1>
    </center>
    <p class="container text-v">Thank you for your interest in volunteering with our organization. We require that all
        our
        potential volunteers
        first
        read our Frequently Asked Questions and Child Protection Policy which can also be found in the menu above. Only
        after
        that should you apply to volunteer with us. Each individual should fill in an application (accompanying children
        under
        15 are exempt but should be mentioned under the “Are You Traveling With Anyone Else?” section along with their
        age and
        relationship to the applicant).</p>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 ">
                <form method="POST">
                    <label for="Full Name" class="col-form-label ">Full Name<sup>
                            *
                        </sup></label>
                    <div class="form-group row">
                        <label class="sr-only" for="firstname">First Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>

                        </div>
                        <label class="sr-only" for="lastname">Last Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <label for="Address" class="col-form-label ">Address<sup>*</sup></label>
                    <div class="form-group row">
                        <label class="sr-only" for="StreetAddress">Street Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="StreetAddress" name="streetaddress" placeholder="Street Address" required>

                        </div>
                        &nbsp;
                        <label class="sr-only" for="StreetAddress2">Street Address Line 2</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="StreetAddress2" name="streetaddress2" placeholder="Street Address Line 2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="city" class=" sr-only">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        </div>
                        <div class="col-md-3">
                            <label for="state" class="sr-only">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State / Province" required>
                        </div>
                        <div class="col-md-3">
                            <label for="zip" class=" sr-only">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postal / Zip Code" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-3 col-form-label">Contact Tel.<sup>*</sup></label>
                        <div class="col-4 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code" required>
                        </div>
                        <div class="col-8 col-md-6">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-3 col-form-label">Email<sup>*</sup></label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Password" class="col-md-3 col-form-label">Password<sup>*</sup></label>
                        <div class="col-md-9">
                            <input type="Password" class="form-control" id="Password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cPassword" class="col-md-3 col-form-label">Confirm-Password<sup>*</sup></label>
                        <div class="col-md-9">
                            <input type="Password" class="form-control" id="cPassword" name="cpassword" placeholder="Confirm-Password" required>
                        </div>
                    </div>
                    <caption>Preferences in Shifts<sup>*</sup></caption>
                    <table class="table ">

                        <thead class="table-header ">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">8am-1pm</th>
                                <th scope="col">1pm-6pm</th>
                                <th scope="col">6pm-11pm</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">Best time for me.</th>
                                <td><input type="checkbox" name="c" value="8am-1pm"></td>
                                <td><input type="checkbox" name="c" value="1am-6pm"></td>
                                <td><input type="checkbox" name="c" value="6am-11pm"></td>
                            </tr>
                            <tr>
                                <th scope="row">Not Available</th>
                                <td><input type="checkbox" name="ch" value="8am-1pm"></td>
                                <td><input type="checkbox" name="ch" value="1am-6pm"></td>
                                <td><input type="checkbox" name="ch" value="6am-11pm"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group row">
                        <label for="text" class="col-form-label">Any Special Comments</label>
                        <textarea name="comments" id="text" class="col-12" rows=" 8"></textarea>
                    </div>
                    <input type="submit" name="submit" id="submitform" value="submit" class="btn btn-primary btn-lg btn-block col-3 offset-4"
                        role="button">

                </form>

            </div>
        </div>

    </div>








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
    </script>

</html>

<?php
if(isset($_POST['submit']))
{
  
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$streetaddress=$_POST['streetaddress'];
$streetaddress2=$_POST['streetaddress2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$areacode=$_POST['areacode'];
$telnum=$_POST['telnum'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$preference=$_POST['c'];
$preferencenotavailbe=$_POST['ch'];
$comments=$_POST['comments'];



$query="INSERT INTO vol (firstname,lastname,streetaddress,streetaddress2,city,state,zip,areacode,telnum,emailid,password,cpassword,preference,preferencenotavailbe,comments) VALUES ('$firstname','$lastname','$streetaddress','$streetaddress2','$city','$state','$zip','$areacode','$telnum','$emailid','$password','$cpassword','$preference','$preferencenotavailbe','$comments')";

$data=mysqli_query($connection,$query);
if($data)
  {
    echo '
    <script> 
    alert("succesfully register!");
    window.location = "index.php";
    </script>
    ';
//   echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($connection);
  }


}

?>