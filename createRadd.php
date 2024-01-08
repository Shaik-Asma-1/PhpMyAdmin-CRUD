<?php include 'header.php'; ?>
<div id="main-content">
    <h2> add records</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress"/>
        </div>
        <div class="form-group">
            <label>course</label>
            <select name="scourse">
            <option value="" selected disabled>Select course</option>
            <?php
                $conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
                $sql="select * from courses";
                $res=mysqli_query($conn,$sql) or die("query failed");
                    while($row=mysqli_fetch_assoc($res)){
            ?>
                        <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
            
            <?php
                    }  
            ?>
            </select>
        </div>
        <div class="form-group">
            <label>PhoneNum</label>
            <input type="text" name="sphonenum">
        </div>
        
        
    <input class="submit" type="submit" value="save">

    </form>
</div>
</div>
</body>
</html>