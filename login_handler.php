<?php 
if (isset($_POST["email"])){
    $email = $_POST["email"];
}
//$email = $_POST["email"];
if (isset($_POST["password"])){
    $password = $_POST["password"];
}
//$password = $_POST["password"];

include "config.php"; 

$login = "SELECT email,password FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con,$login);
$count = mysqli_num_rows($result);
if($count == 1){
    session_start();
    $_SESSION["LoggedUser"]= $email;
    header('location:profile.php');
}
else{
    echo "Khroj Bhalek Hadchi machi diualk ya Lbasel:";
}
?>