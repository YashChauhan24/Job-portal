<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';
$port='3307';

$conn= new mysqli($server,$username,$password,$database,$port);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
?>