<?php
    include 'dbconnection.php';
     include 'component/nav/userheader.php';
    // session_start();
    // $id=$_SESSION['logid'];
    session_start();
    if (!(isset($_SESSION['logid']))) {
    header('location:index.php');
}
$id = $_SESSION['logid'];
?>
    <br><br><br><br> 
    <div class="modal-dialog">
                    <div class="modal-content">
            <div class="modal-header book-form">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <h4>My Profile</h4>
<?php

    $res="SELECT * FROM `tbl_address` WHERE lid='$id'";
    $data=mysqli_query($con,$res) or die(mysqli_error($con));
    $r=mysqli_fetch_array($data);

    $sql="SELECT * FROM `tbl_district` WHERE did='$r[4]'";
    $data1=mysqli_query($con,$sql) or die(mysqli_error($con));
    $r1=mysqli_fetch_array($data1);

    $sql1="SELECT * FROM `tbl_state` WHERE sid='$r1[1]'";
    $data2=mysqli_query($con,$sql1) or die(mysqli_error($con));
    $r2=mysqli_fetch_array($data2);

    $sql2="SELECT * FROM `tbl_country` WHERE cid='$r2[1]'";
    $data3=mysqli_query($con,$sql2) or die(mysqli_error($con));
    $r3=mysqli_fetch_array($data3);

?>
     
    <form action="" method="post">
    <!-- <h2><center>VIEW PROFILE</center></h2> -->
        
         
        <table border="1">
        <!-- <h2 class="text-center"><center>Profile</center></h2> -->
        <tr>
          <th>Name</th>
          <th><?php echo $r['2']; ?></th>
        </tr>
        <tr>
          <th>Address</th>
          <th><?php echo $r['3']; ?></th>
        </tr>
        <tr>
          <th>District</th>
          <th><?php echo $r1[2]; ?></th>
        </tr>
        <tr>
          <th>State</th>
          <th><?php echo $r2[2]; ?></th>
        </tr>
        <tr>
          <th>Country</th>
          <th><?php echo $r3[1]; ?></th>
        </tr>
        <tr>
          <th>Mobile</th>
          <th><?php echo $r['5']; ?></th>
        </tr>
        <!-- <tr><a href="edit_uprofile.php?uid=<?php echo $r["adr_id"];?>">Edit</a></tr> -->
</table>
</form>
</div>
</div>
</div>

<br><br>
<?php
 include 'component/footer.php';
?>



                                                               

