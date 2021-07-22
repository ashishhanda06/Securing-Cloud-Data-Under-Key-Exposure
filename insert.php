 <?php
include("connection.php");


?>

<html>
<head>
</head>
<body>
welcome
<form action="" method="GET">
Rollno<input type="text" name="rollno" value=""/><br>
Name<input type="text" name="studentname" value=""/><br>
Class<input type="text" name="class" value=""/><br>
<input type="submit" name="submit" value="Login"/>
</form>
<?php
if($_GET['submit'])
{
   $rn = $_GET['rollno'];
   $sn = $_GET['studentname'];
   $cl = $_GET['class'];
   if($rn!="" && $sn!="" && $cl!="")
     {
       $query = "insert into student value('$rn','$sn','$cl')";
       $data = mysqli_query($conn,$query);
       if($data)
         {
             echo " data inserted in data base";
         }
      }
      else 
        {
          echo " all fields are required";
        }
}


?>
<?php

?>
</body>
</html>