<?php
/*1. Session Start + Redirecting using header(location)
2.Connecting to the Database
3.Selecting the Database;
4.Declaring the Variable and using POST method
5.Using the Select Query
6.Storing the  Result using _query
7.Fetching the Number of Rows using *** _num_rows
8.Using if and else Duplicity
 */

//Step1:

session_start();
{
    header('location:Login.php');
}

$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo 'Connection Successfull';
} else {
    echo 'Not Connected';
}

mysqli_select_db($con, 'sessionpractical'); //parameter

$name = $_POST['email1'];
$password = $_POST['password1'];

$q = "select * from signup where email='$name' && password='$password' "; // &&

$result = mysqli_query($con, $q);

$row = mysqli_num_rows($result);

if ($row == 1) {
    echo "This Account Already exist";
} else {
    $qy = "insert into signup(email,password) values ('$name','$password') "; //No values
    mysqli_query($con, $qy);
    echo "Values Inserted";
}
