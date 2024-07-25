<?php

// $conn = mysqli_connect("localhost","root","","grey")
// or die("Couldn't connect to database");

$conn = mysqli_connect('localhost','root','','grey');
if($conn){
    echo "connection succesful";
}
else{
    die(mysqli_error($conn));
}

?>