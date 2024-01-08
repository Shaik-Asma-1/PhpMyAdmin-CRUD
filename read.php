<?php include 'header.php';?>
<div id="main-content">
    <h2>All records</h2>
<?php

$conn=mysqli_connect("localhost","root","","crud") or die("conn failed");
$sql="select * from student join courses where student.scourse=courses.cid";
$res=mysqli_query($conn,$sql) or die("query failed");
if(mysqli_num_rows($res)>0){
    
        ?>

        <table cellpadding="7px">
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>course</th>
            <th>PhoneNum</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            while($row=mysqli_fetch_assoc($res)){
            ?>
                <tr>
                    <td><?php echo $row['sid']?></td>
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['saddress']?></td>
                    <td><?php echo $row['cname']?></td>
                    <td><?php echo $row['sphonenum']?></td>

                    <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='deleteinline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                    </td>
                </tr>
            
            <?php
            }
            ?>
            </tbody>
        </table>

<?php        
    
}else{
    echo "<h2> No data found</h2>";
}
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>