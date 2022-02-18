<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/new_moon.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <title>New Moon</title>
</head>

<body>
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark mt-2">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course.html">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#job">Apply</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"> <?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5 mb-5 banner" id="about">
        <div class="row">
            <div class="col-md-6 col-sm-12 txt">
                <h2>Welcome to <span style="color:tomato">New Moon</span></h2>

                <small>
                    <p> We're dedicated to providing you the very best of <span
                            style="color:tomato; font-weight: bold;">Website , Mobile app, IOS</span> app and more.
                        Founded
                        in 2022 by Md. Dulal Miah, new moon has come a long way from its beginnings in Gazipur.</p>

                    <p>When <span style="color:tomato; font-weight: bold;">Dulal</span> first started out, his passion
                        for
                        android app drove them to start their own business.
                        We hope you enjoy our products as much as we enjoy offering them to you. If you have any
                        questions
                        or comments, please don't hesitate to contact us.</p>
                </small>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="images/banner/working-girl.png" class="img-fluid mx-auto d-block aboutImage" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="team">
        <h3 style="text-align: center;">Members</h3>
    </div>


    <div class="container carousel mt-5 mb-5">
        <div id="carouselExampleControls" class="carousel slide bg" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4>UI/UX Designer</h4>
                            <p>A UI Designer — or User Interface Designer — designs all the screens through which a user
                                will move while using a website, app, or video game.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/team_member/team-01.png" class="d-block w-100 carousel-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row  align-items-center">
                        <div class="col-md-7">
                            <h4>Web Developer</h4>
                            <p>A Web Developer is responsible for the coding, design and layout of a website according
                                to a company's specifications.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/team_member/team-02.png" class="d-block w-100 carousel-img" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4>Android App Developer</h4>
                            <p>Monitoring the performance of live apps and work on optimizing them at the code level.
                                Identifying and resolving bottlenecks, rectifying bugs and enhancing application
                                performance.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/team_member/team-03.png" class="d-block w-100 carousel-img" alt="...">
                        </div>
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


    <div class="container mt-5 mb-5" id="job">
        <div class="row">
            <div class="col-md-6 col-sm-12" style="padding: 50px;">
                <h2>Find Your New Dream Job with <span style="color:tomato; font-weight: bold;">New Moon</span></h2>
                <button class="btn btn-success mt-3"><a href="job.html">Apply Now</a></button>
            </div>

            <div class="col-md-6 col-sm-12">
                <img src="images/Interview/interview.png" class="img-fluid mx-auto d-block aboutImage" alt="">
            </div>
        </div>
    </div>

    <div class="container address mt-5 mb-5">

        <div class="row address">
            <div class="col-md-4">

                <ul>
                    <li><small>About New Moon</small></li>
                    <li><small>Mobile App</small></li>
                    <li><small>Website</small></li>
                    <li><small>Website</small></li>
                </ul>

            </div>
            <div class="col-md-2">
                <ul>
                    <li><small>SUPPORT</small></li>
                    <li><small>Contact Us</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>DOWNLOAD THE NEW MOON APP in APP STORE and PLAY STORE</h5>
                <small>Take New Moon with you and learn anywhere, anytime on your phone and tablet.</small>
            </div>
        </div>
    </div>


    <!-- js -->
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>