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
    <title>New Moon</title>
     <!-- favicon -->
     <link rel="shortcut icon" href="images/new_moon.png" type="image/x-icon">
     <!-- bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- css -->
     <link rel="stylesheet" href="css/job.css">
</head>
<body>
    <div class="container mt-5">
        <h5>Explore Course By Category.Let's your choice <?php echo $_SESSION['username']; ?></h5>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Data Visulization</h5>
                      <p class="card-text">We are teaching about data visulization using seaborn, matplotlib, powerbi.</p>
                      <button class="btn btn-primary">Add to Cart</button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Data Analyst</h5>
                        <p class="card-text">We are teaching about data visulization using seaborn, matplotlib, powerbi.Exel, python .</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Android app Development</h5>
                        <p class="card-text">We are teaching about Android app  developer using android studio, Java.</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>