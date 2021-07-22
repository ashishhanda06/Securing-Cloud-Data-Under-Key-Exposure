<?php
include("connection.php");
$query = "insert into student value('4','dd','V')";
$data = mysqli_query($conn,$query);
if($data)
{
echo " data inserted in data base";
}
?>