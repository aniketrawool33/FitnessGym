<?php include_once 'header.html'?>
<?php include_once 'db_connection_setup.php' ?>

<?php

  $sql="select P.plan_name,D.day_name ,E.Exercise_name from plan as P,no_of_days as D,
  plan_has_exercise as Q ,Exercise as E where Q.Plan_id = P.Plan_id and  Q.Day_id=D.Day_id  and E.Exercise_id=D.Exercise_id";
 
   $result=mysqli_query($con,$sql);

   $row1=mysqli_num_rows($result);

   if($row1>0){
       while($row=mysqli_fetch_assoc($result)){
           
           
          echo"Plan:" .$row["plan_name"]."<br>"."Day_name:".$row["day_name"]."<br>" ."Exercise_Name: ".$row["Exercise_name"];
          echo"<br><br>";
       }
   }
   else{
       echo"0 results";
   }

?>