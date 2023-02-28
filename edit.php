<html>
<head>

</head>
<body>
<?php
$host='192.168.100.7';
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
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <label for="person-name">Name:</label>
    <input type = "text" name="name" id="person-name" value="<?php echo $data['Name']?>"><br>
    <label>Address:</label>
    <input type = "text" name="thau" value="<?php echo $data['Address']?>"><br>
    <input type="submit">
</form>
</body>
</html>