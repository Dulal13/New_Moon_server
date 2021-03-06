<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/new_moon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- title -->
    <title>Login</title>
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


  <?php

    error_reporting(0);
    require('dp.php');
    session_start();

    if(! $_SESSION['username']){
    if (isset($_POST['submit'])) {

        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);


        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE is_verified = '1' AND email='$email' AND username='$username'
                     AND password='" . md5($password) . "'";
                     
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;

            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Incorrect username or password or email or not verified');
            window.location.href='login.php';
            </script>");
        }
    } else {
?>
    <section class="form my-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="LRO_image/login_image.gif" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">

                    <h1 class="font-weight-bold py-3">LOGEIN</h1>
                    <h4>Sign In Into Your Account</h4>
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="username" id="username" class="form-control my-3 p-2" placeholder="User Name"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" id="email" class="form-control my-3 p-2" placeholder="Email-Address"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" id="password" class="form-control my-3 p-2" placeholder="******"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="submit" id="submit"submit class="form-control my-3 p-2 btn" value="Submit"Required>
                            </div>
                        </div>
                        <p>Don't have an account? <a href="registration.php">Register Now</a></p>
                        <p>Forgot password? <a href="forgot.php">Click here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    }}
    else{
        header("Location: dashboard.php");
    }
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>