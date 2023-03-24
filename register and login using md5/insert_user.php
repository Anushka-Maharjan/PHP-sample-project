<?php
$host='localhost';
$username="root";
$password="";
$database="dss";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $query="insert into users(name,email,password) 
values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['password'])."')";
    if ($conn->query($query)==true) {
        echo "user registered";
    }else{
        echo "failed";
    }

}
