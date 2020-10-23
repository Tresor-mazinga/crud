<?php
//Connection Method
require_once("connection.php");

//Set submit button
if(isset($_POST['submit']))
{
    //If the fields are empty
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']))
    {
        echo "Please Fill in the blanks";//Display This message
    }else{
        //If it's not, get the data from the 3 inputs fields
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];
        $query = "insert into komeka(User_Name, User_Email, User_Age) values('$UserName','$UserEmail','$UserAge')";
        $result = mysqli_query($con,$query); // 2 parametres

        if($result) //Call result variable
        {
           header("location:view.php");//if the result is fine locate at the index php

        }else{

            echo "Please check your query";// if not display this message

        }
    }
}else{
    header("location:index.php");
}
?>