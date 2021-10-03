<?php
if(isset($_GET['donorId'])){
    $id = $_GET['donorId'];
    $con = mysqli_connect("localhost","root","","donation");
    $sql = "DELETE FROM donor WHERE d_id='$id'";
    if(mysqli_query($con,$sql)){
        header('location:edit_posts.php');
    }
}
?>