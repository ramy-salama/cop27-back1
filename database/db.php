<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="cop27-back1";

try{
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
   // echo "success";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}