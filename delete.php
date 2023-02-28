<?php
$host='192.168.100.7';
$username="root";
$password="";
$database="dss";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $query="delete from student where id=".$_GET['id'];
    if ($conn->query($query)==true) {
        echo "Data deleted";
    }else{
        echo "failed";
    }
}
header('Location: list.php');