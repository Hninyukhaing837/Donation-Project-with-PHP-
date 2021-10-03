<?php
echo "<pre>";
//print_r($_POST);
function filterText($text){
    $text = trim($text);
    $text = htmlentities($text,ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}
$d_title = filterText($_POST['d_title']);
$d_description = filterText($_POST['d_description']);
$d_owner= filterText($_POST['d_owner']);
$d_status = rand(0,1);
$d_donate_money = filterText($_POST['d_donate_money']);

$con = mysqli_connect("localhost","root","","donation");
$sql = "INSERT INTO donor (d_title,d_description,d_owner,d_status,d_donate_money) 
        VALUES ('$d_title','$d_description','$d_owner','$d_status','$d_donate_money')";
if(mysqli_query($con,$sql)){
    header("location:add_posts.php?return=success");
}else{
    header("location:add_posts.php?return=fail");

}