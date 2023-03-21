<html>
<head></head>
<body>
<a href="form.php"><button>Create</button></a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php
$host='192.168.100.7';
$username="root";
$password="";
$database="dss";

$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    echo "Failed";
}else{
    $query="select * from student";
    $result=mysqli_query($conn,$query);
    while ($each=mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$each['Name']."</td>
                <td>".$each['Address']."</td>
                <td><img src='image/".$each['image']."' style='width: 100px'></td>
                <td><a href='edit.php?id=".$each['id']."'> Edit</a></td>
                <td><a href='delete.php?id=".$each['id']."'> Delete</a></td>
              </tr>";
    }
}
?>
</table>
</body>
</html>
