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
    $query="update student set Name='".$_POST['name']."',address='".$_POST['thau']."' where id=".$_POST['id'];
    if ($conn->query($query)==true) {
        echo "Data updated";
    }else{
        echo "failed";
    }
}
header('Location: list.php');