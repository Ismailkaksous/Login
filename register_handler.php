<?php 
if (isset($_POST["firstName"])){
    $firstName = $_POST["firstName"];
}
//$firstName = $_POST["firstName"];
if (isset($_POST["lastName"])){
    $lastName = $_POST["lastName"];
}
//$lastName = $_POST["lastName"];
if (isset($_POST["email"])){
    $email = $_POST["email"];
}
//$email = $_POST["email"];
if (isset($_POST["password"])){
    $password = $_POST["password"];
}
//$password = $_POST["password"];
if (isset($_POST["age"])){
    $age = $_POST["age"];
}
//$age = $_POST["age"];
if (isset($_POST["mobile"])){
    $mobile = $_POST["mobile"];
}
//$mobile = $_POST["mobile"];

include "config.php";   // Appelere toujours la fonction config.php 

$insertUser = "INSERT INTO users(firstName,lastName,email,password,age,mobile)
values('$firstName','$lastName','$email','$password','$age','$mobile')";

$result = mysqli_query($con,$insertUser);
if($result){
    echo "<h1>User Creat Successfilly</h1>";
    echo "<a href='loging.php'>cleck here to loging</a>";
}
else{
    echo "Error:".mysqli_error($con);
}
?>