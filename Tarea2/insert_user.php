<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$addres = $_POST['addres'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$id','$name','$lastname','$addres','$phone','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>