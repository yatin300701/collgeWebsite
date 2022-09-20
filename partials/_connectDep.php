<?php
    $username="root";
    $server="localhost";
    $password="";

    $db="gu_college";
    $conn=mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        die("Some error occured");
        exit();
    }
?>