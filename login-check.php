<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username=="admin" && $password=="123456"){
    echo "Login success";

     $_SESSION['username']=$username;
     header("location: dashboard.php");

}
else{
    $msg="Sorry Something Missing";

    header("location: login.php?msg=$msg");
}



?>