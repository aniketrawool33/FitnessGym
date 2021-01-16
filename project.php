<?php

session_start(); //To use the Session Variable Properly;

if(!isset($_SESSION['username']))
{  //if the User click's on Back Button or Logout then its should redirect to Login.php
header('location:Login.php');
}

?>
<?php include 'header.html'?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container">
      <a href="logout.php">LOGOUT</a>
         <h2 class="text-center text-success">
              Welcome <?php echo $_SESSION['username'];?> <!--So that User can come to Homepage-->
              
         </h2>
         
              <div class="row">
                <div class="col-md-4">
                  <img src="img/Plan/Fatloss.jpg" alt="">
                  <p>
                  <form action="FatLossPlan.php" method="post"> 
                     <button type="submit" class="btn btn-info">View</button>
                  </form>
                  <p>
                  Workout Details Duration:	5 weeks
                  <p> Workouts per week:	5
                  <p>  Fitness level:	Intermediate
                  <p> Equipment needed:	Minimal Equipment
                </div>
                <div class="col-md-4">
                  <img src="img/Plan/BodyBuilder.jpg" alt="">
                  <p>
                    <form action="MuscleBuildingPlan.php">
                           <button type="submit" class="btn btn-info">View</button>
                    </form>
                  <p>
                  Workout Details Duration:	5 weeks
                  <p> Workouts per week:	5
                  <p>  Fitness level:	Intermediate
                  <p> Equipment needed:	Minimal Equipment
                </div>
                  
                   <div class="col-md-4">
                  <img src="img/Plan/Weight_Gain.jpg" alt=""> 
                  <p>
                  <form action="MuscleBuildingPlan.php">
                           <button type="submit" class="btn btn-info">View</button>
                    </form>
                  <p>
                  Workout Details Duration:	5 weeks
                  <p> Workouts per week:	5
                  <p>  Fitness level:	Intermediate
                  <p> Equipment needed:	Minimal Equipment
                </div>
              </div>
         

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php include_once'footer1.html'?>