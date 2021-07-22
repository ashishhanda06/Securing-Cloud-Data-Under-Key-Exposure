<?php
 $servername ="localhost";
 $username = "root";
$password = "";
$dbname = "projectphp";
$conn = new mysqli($servername, $username, $password,$dbname);

if($conn)
{
echo "";
}
else
{
echo" connection failed";
}
?>