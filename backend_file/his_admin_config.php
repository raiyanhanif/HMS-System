<?php

$localhost="localhost";
$username="root";
$password="";
$db="hms";

$conn=mysqli_connect($localhost,$username,$password,$db);



if(!$conn)
{
    die("error:".mysqli_error($conn));
}

?>