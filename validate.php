<?php


   session_start();
   

   $con=mysqli_connect('localhost','root');
   if($con)
   {
       echo'Connection Successfull';
   }
    else
    {
        echo 'Not Connected';
    }

    mysqli_select_db($con,'sessionpractical'); //parameter

    $name=$_POST['email1'];
    $password=$_POST['password1'];

    $q="select * from signup where email='$name' && password='$password' "; // && 

    $result=mysqli_query($con,$q);

    $row=mysqli_num_rows($result);

    if($row==1){
        $_SESSION['username']=$name;
        header('location:project.php');
    
    }
    else{
         echo'Login Not Successfull';
    }
   


   ?>
