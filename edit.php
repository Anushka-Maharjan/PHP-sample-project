<html>
<head>

</head>
<body>
<?php
$host='192.168.102.140';
$username="root";
$password="";
$database="dss";

$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    echo "Failed";
}else{
    $query="select * from student where id=".$_GET['id'];
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
}
?>
<form method="post" action="update.php">
    <label for="person-name">Name:</label>
    <input type = "text" name="name" id="person-name" value="<?php echo $data['name'] ?>" ><br>
    <label>Address:</label>
    <input type = "text" name="thau" value="<?php echo $data['address']?>"><br>
    <input type="submit">
</form>
</body>
</html>