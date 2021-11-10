<?php


$connection = mysqli_connect('localhost', 'root', '', 'orphan'); 
if($connection)
{
  //echo "Connection OK";
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />

    <script src="https://kit.fontawesome.com/" crossorigin="anonymous"></script>
    <style type="text/css">
    .btn-secondary {
        display: inline;
        background: black;
        padding: 10px;
    }

    .a {
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>
    <center><button class="btn btn-secondary"><a href="../" class="a">Back</a></button></center>
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Lets get in touch</h3>
                <p class="text">Orphanage and Donation Management System allows users and donor's to manage their donations.Orphanage members can
                    easily keep
                    the record
                    of orphans and can track the history of donation.This system allows users to donate, sponsor and adopt a life.</p>
                <div class="info">
                    <div class="information">
                        <!-- <img src=""   class="icon" alt=""> -->
                        <i style="font-size:24px" class="fa fa-map-marker"></i>
                        <p>Location</p>
                    </div>
                    <div class="information">
                        <!-- <img src=""   class="icon" alt=""> -->
                        <i style="font-size:24px" class="fa">&#xf0e0;</i>
                        <p>Orphan&donation@gmail.com</p>
                    </div>
                    <div class="information">
                        <!-- <img src=""   class="icon" alt=""> -->
                        <i style="font-size:24px" class="fa">&#xf095;</i>
                        <p>123456789</p>
                    </div>
                    <div class="social-media">
                        <p>connect with us</p>
                        <div class="social-icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            </a>

                        </div>
                    </div>


                </div>

            </div>
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="contact.php" method="post">
                    <h3 class="title">Contact Us</h3>
                    <div class="input-container">
                        <input type="text" name="name" id="Name" class="input">
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" id="Email" class="input">
                        <label for="">Email</label>
                        <span>Email</span>

                    </div>
                    <div class="input-container ">
                        <input type="tel" name="phone" id="Phone" class="input">
                        <label for="">Phone</label>
                        <span>Phone</span>

                    </div>
                    <div class="input-container textarea ">
                        <textarea name="message" id="Message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>

                    </div>
                    <input type="submit" name="submit" value="send" class="btn" />
                </form>

            </div>
        </div>
    </div>
    <script src="app.js"></script>


    <script>
    function sendmail() {
        var name = $('#Name').val();
        var email = $('#Email').val();
        var phone = $('#Phone').val();
        var message = $('#Message').val();

        var Body = 'Name: ' + name + '<br>Email: ' + email + '<br>Phone: ' + phone + '<br>Message: ' + message;

    }
    Email.send({
        Host: "smtp.gmail.com",
        Username: "",
        Password: "",
        To: '',
        From: "",
        Subject: "New mail on contact form:" + name,
        Body: $('Body')
    }).then(
        message => {
            if (message == "OK") {
                alert("thankyou you are email has been send")
            } else {
                console.error(message);
                alert("there is error at sending message")
            }
        }
    );
    </script>

</html>
<?php
include("connect.php");
?>
<?php
if( isset($_POST['submit']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];




$query="INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

$data=mysqli_query($connection,$query);
if($data)
  {
  echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($connection);
  }


}

?>