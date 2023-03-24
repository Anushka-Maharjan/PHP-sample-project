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
    if(!$conn){
        echo "Failed";
    }else{
        $query="select * from user where email='".$_POST['email']."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $data=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$data['password'])){
                echo 'Successfully Logged in';
            }else{
                echo 'password incorrect';
            }
        }else{
            echo 'user not found';
        }
    }
}
