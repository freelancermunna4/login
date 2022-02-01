<?php

$connection = mysqli_connect('localhost','root','','login');
if(!$connection){
    die("not connected.".mysqli_error($connection));
}

if(isset($_REQUEST['submit'])){
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];

    $query = "SELECT * FROM log WHERE user = '$user' && pass = '$pass'";
    $query_connect = mysqli_query($connection,$query);

    $row_count = mysqli_num_rows($query_connect);
    if($row_count){
        $_SESSION["user"] = $user;
        header("location:welcome.php");
    }else{
        echo "your user name or password is wrong!";
    }
}















?>