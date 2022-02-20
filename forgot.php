<?php
  require('dp.php');
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
     <!-- favicon -->
     <link rel="shortcut icon" href="images/new_moon.png" type="image/x-icon">
     
    <title>Forgot Password</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219,226,226);
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .btn{
            color:black;
            background:white;
            border:2px solid lightslategray;
            font-weight:bold;
        }
        .btn:hover{

            color:white;
            background: black;
            font-weight:bold;
        }
    </style>
  </head>
  <body>
    
    <section class="form my-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="LRO_image/OTP.gif" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">

                    <h1 class="font-weight-bold py-3">Forgot Password</h1>
                    <h4>Enter Your Email</h4>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" id="email" class="form-control my-3 p-2" placeholder="Email-Address"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" id="password" class="form-control my-3 p-2" placeholder="New Password"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="submit" id="submit"submit class="form-control my-3 p-2 btn" value="Submit"Required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </section>

    <?php

    if(isset($_POST['submit']))
    {
       

        if( mysqli_query($con ,  "UPDATE users SET password= '$_POST[password]' WHERE email = '$_POST[email]'")){

            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Password Update successfully');
            window.location.href='login.php';
            </script>");
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Don't find your email');
            window.location.href='login.php';
            </script>");
        }


    }
?>





 <!-- Optional JavaScript --> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>