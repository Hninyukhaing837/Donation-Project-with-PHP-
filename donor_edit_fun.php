<?php
echo "<pre>";
//print_r($_POST);
$con = mysqli_connect("localhost","root","","donation");
$id = $_GET['donorId'];
$d_title = $_POST['d_title'];
$d_owner = $_POST['d_owner'];
$d_donate_money = $_POST['d_donate_money'];
$sql = "UPDATE donor SET d_title='$d_title',d_owner='$d_owner',d_donate_money='$d_donate_money' WHERE d_id='$id'";
if(mysqli_query($con,$sql)){
    header("location:edit_posts.php?donorId=$id");
//    print_r($_POST);
}
