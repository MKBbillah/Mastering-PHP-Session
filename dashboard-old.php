<?php

session_start();
if(isset($_SESSION['username'])){

    echo $_SESSION['username'];
}
else{
    $msg="Sorry Something Missing";
    header("location: login.php?msg=$msg");
}

?>
<a href="logout.php">log out</a>