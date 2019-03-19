<?php
include '../dbconnection.php';
include 'component/nav/userheader.php';
session_start();
    if (!(isset($_SESSION['logid']))) {
    header('location:index.php');
}
$id = $_SESSION['logid'];
?>


<?php
 include 'component/footer.php';
?>
