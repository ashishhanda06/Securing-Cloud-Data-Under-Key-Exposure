<style>
td
{
  padding :10px;
}
</style>
<?php
include("connection.php");
$query = "select * from student where class='V'";
$data = mysqli_query($conn,$query) ;
$total = mysqli_num_rows($data);
  

if($total !=0)
{
?>
<table><tr>
<td>rollno</td><td>name</td><td>class</td>
<td colspan="2">operations</td>
</tr>
<?php
  while($result = mysqli_fetch_assoc($data)  )
  {
    echo "<tr>
    <td>".$result['rollno']."</td>
    <td>".$result['name']."</td>
    <td>".$result['class']."</td>
    <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>edit</a></td>
    <td>delete</td>
    </tr>";

  }
}
else
{
  echo "no record";
}

?></table>
   