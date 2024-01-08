<?php
$stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_course=$_POST['scourse'];
$stu_phonenum=$_POST['sphonenum'];

$conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
$sql="update student set sname='{$stu_name}',saddress='{$stu_address}',scourse='{$stu_course}',sphonenum='{$stu_phonenum}' where sid={$stu_id}";
$res=mysqli_query($conn,$sql) or die("query failed");
header("Location:http://localhost/practice/read.php");
mysqli_close($conn);

?>