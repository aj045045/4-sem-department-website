<?php
$server="localhost";
$user="root";
$password="";
$database="dcsdb";

$conn=mysqli_connect($server,$user,$password,$database);

if($conn){
// echo "Connected";
}
else{
// echo "Not connected";
}
?>