<?php
include 'header.php';
?>
<div id="main-content">
<h2> Delete record</h2>
<form class="post-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
<div class="form-group">
<label> ID</label>
<input type="text" name="sid">
</div>

<input class="submit" type="submit" name="delbtn" value="Delete">
</form>
</div>



<?php
if(isset($_POST['delbtn'])){
    $conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
    $stu_id=$_POST['sid'];
    $sql="delete from student where sid={$stu_id}";
    $res=mysqli_query($conn,$sql) or die("query failed");
    header("Location:http://localhost/practice/read.php");
    mysqli_close($conn);
}



?>
