<?php
include("connect.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

    <link rel="icon" href="images/title.jpg" type="image/x-icon">
    <style>
    .main {
        margin: 250px;
    }

    .o {

        margin-bottom: 10px;
    }

    body {
        background-image: url(https://escozulchile.cl/wp-content/uploads/2018/07/wallpapereclweb.jpeg);
    }
    </style>
</head>


<body>

    <div class="main">

        <form action="index1.php" class="row r" method="post">


            <label for="" class="col-form-label offset-4 col-4">
                <center>
                    <h2>Payment-form</h2>
                </center>
            </label>

            <input type="text" class=" o offset-4 col-4" name="name" id="name" placeholder="Enter your name" />
            <input type="email" class="o offset-4 col-4" name="email" id="email" placeholder="Enter your email-id" />
            <input type="number" class="o offset-4 col-4" name="contact" id="contact" placeholder="Enter your contact-no" />
            <input type="number" class="o offset-4 col-4" name="amount" id="amount" placeholder="Enter the amount of donation" />
            <input type="button" class="o offset-4 col-4 btn btn-success" name="btn" id="btn" value="Pay Now" onclick="pay_now()" />

        </form>
    </div>



</body>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function pay_now() {
    var name = jQuery('#name').val();
    var amount = jQuery('#amount').val();
    var email = jQuery('#email').val();
    var contact = jQuery('#contact').val();

    jQuery.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: "amount=" + amount + "&name=" + name + "&email=" + email + "&contact=" + contact,
        success: function(result) {
            var options = {
                "key": "rzp_test_AVMWVIjl0PGjb2",
                "amount": amount * 100,
                "currency": "INR",
                "name": "Orphanage And Charity Management System",
                "description": "Test Transaction",
                "image": "images/money.jpeg",
                "handler": function(response) {
                    jQuery.ajax({
                        type: 'post',
                        url: 'payment_process.php',
                        data: "payment_id=" + response.razorpay_payment_id,
                        success: function(result) {
                            window.location.href = "donation.php";
                        }
                    });
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();

        }
    });
}
</script>