<?php
$host="localhost";
$username="root";
$password="";
$database="dss";

$connection=mysqli_connect($host,$username,$password,$database);
if(!$connection){
    echo "failure";
}else{
    echo "success";
    $query="insert into students()";
}