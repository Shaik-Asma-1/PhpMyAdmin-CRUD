<?php
include 'header.php';
?>
<div id="main-content">
<form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
        <label>Update id</label>
        <input type="text" name="sid"/>
    </div>
    <input class="submit" type="submit" name="showbtn" value="show">
</form>
    <?php
    if(isset($_POST['showbtn'])){
    $conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
    $stu_id=$_POST['sid'];
    $sql="select * from student where sid={$stu_id}";
    $res=mysqli_query($conn,$sql) or die("query failed");
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            ?>
        <form class="post-form" action="updatedata.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="sid" value="<?php echo $row['sid'];?>" />
                <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
            </div>

            <div class="form-group">
                <label>Course</label>
                <?php
                
                    $sql1= "select * from courses";
                    $res1=mysqli_query($conn,$sql1) or die("Query unsuccessful.");
                    if(mysqli_num_rows($res1)>0){
                        echo '<select name="scourse">';
                        while($row1=mysqli_fetch_assoc($res1)){
                            if($row['scourse'] == $row1['cid']){
                                $select="selected";
                            }else{
                                $select= "";
                            }
                            echo "<option {$select} value='{$row1['cid']}'> {$row1['cname']}</option>";
                        }
                        echo "</select>";
                    }
                ?>


            </div>

            <div class="form-group">
                <label>PhoneNum</label>
                <input type="text" name="sphonenum" value="<?php echo $row['sphonenum']; ?>"/>
            </div>

            <input class="submit" type="submit" value="update">
        </form>

<?php
        }
    }
}

?>

    







</div>

















