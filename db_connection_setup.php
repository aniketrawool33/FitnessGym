<?php
 
  $con=mysqli_connect('localhost','root');
  if($con)
    {
        // echo'Connection Successfull';
    }
     else
     {
         echo 'Not Connected';
     }
 
     mysqli_select_db($con,'exerciseplans');
     
?>
