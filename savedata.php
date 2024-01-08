<?php
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_course=$_POST['scourse'];
$stu_phone=$_POST['sphonenum'];
$conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
$sql= "insert into student(sname,saddress,scourse,sphonenum) values('{$stu_name}','{$stu_address}','{$stu_course}','{$stu_phone}') ";
$res=mysqli_query($conn,$sql) or die("Query unsuccessful.");

header("Location:http://localhost/practice/read.php");
mysqli_close($conn);
?>

