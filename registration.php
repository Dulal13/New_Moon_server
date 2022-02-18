<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration</title>
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
    session_start();
    require('dp.php');
    

    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $cpassword = stripslashes($_REQUEST['cpassword']);
        $cpassword = mysqli_real_escape_string($con, $cpassword);

        $create_datetime = date("Y-m-d H:i:s");

       
    //     if( $password ==  $cpassword){
    //     $query    = "INSERT into users(username, password, email, create_datetime)
    //     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    //     $result   = mysqli_query($con, $query); 
    //     if ($result) {
    //         header("Location: login.php");
    //     }
    //     } else {
    //         // echo '<script>alert("password not match")</script>';
    //         // header("Location: registration.php");
    //         echo ("<script LANGUAGE='JavaScript'>
    // window.alert('Password Not Match');
    // window.location.href='registration.php';
    // </script>");
        // }

        if( $password ==  $cpassword){
            $select = mysqli_query($con, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($con));
            if(mysqli_num_rows($select)) {

                echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Email already used');
                  window.location.href='registration.php';
                  </script>");
                   
               }
            else{
                $query    = "INSERT into users(username, password, email, create_datetime)
                 VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                 $result   = mysqli_query($con, $query); 
                 if ($result) {
                    header("Location: login.php");
                 }
            }
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Password not match');
            window.location.href='registration.php';
            </script>");
        }

} 
    else {
?>
    
    <section class="form my-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="LRO_image/registration.gif" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">

                    <h1 class="font-weight-bold py-3">Registration</h1>
                    <h4>Sign Up For Your Account</h4>
                    <form  action="" method="post">
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
                                <input type="password" name="password" id="password" class="form-control my-3 p-2" placeholder="Password"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="cpassword" id="cpassword" class="form-control my-3 p-2" placeholder="Confirm Password"Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="submit" id="submit"submit class="form-control my-3 p-2 btn" value="Submit"Required>
                            </div>
                        </div>
                        <p> Have you an account? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    }
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>