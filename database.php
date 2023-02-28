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
    $query="insert into student(Name,Address) values('".$_POST['name']."','".$_POST['thau']."')";
    if ($conn->query($query)==true) {
        echo "Data inserted";
    }else{
        echo "failed";
    }

}
header('Location: list.php');