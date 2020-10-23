<?php
require_once("connection.php");

if(isset($_GET['Del']))
{
    $UserID = $_GET['Del'];
    $query = "delete from komeka where User_ID = '" . $UserID ."'";
    $result = mysqli_query($con, $query);

    if($result)
    {
        header("location:view.php");
    }else{
        echo "Please check your Query!";
        }
}else{
    header("location:view.php");
}


?>