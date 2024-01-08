<?php
$conn= mysqli_connect("localhost","root","","crud") or die("conn failed");
$stu_id=$_GET['id'];
$sql="delete from student where sid={$stu_id}";
$res=mysqli_query($conn,$sql) or die("query failed");
header("Location:http://localhost/practice/read.php");
mysqli_close($conn);
?>