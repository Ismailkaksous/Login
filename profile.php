<?php 
session_start();
if( !isset($_SESSION["LoggedUser"])){
    header('location:login.php');
}
?>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>

<body>
<?php 
include "config.php";  // Meme truc qu'avant 
$email = $_SESSION["LoggedUser"];
$viewUser = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($con,$viewUser);
if(!$result){
    echo "Error:". mysqli_error($con);
}
$row = mysqli_fetch_array($result);
$firstName = $row["firstName"];
$lastName = $row["lastName"];
$email = $row["email"];
$password = $row["password"];
$age = $row["age"];
$mobile = $row["mobile"];
?>
<h1>User profile </h1>
<label>First Name:</label>
<p><?php echo"$firstName"?></p> 

<label>last Name:</label>
<p><?php echo"$lastName"?></p>

<label>email:</label>
<p><?php echo"$email"?></p>

<label>password:</label>
<p><?php echo"$password"?></p>

<label>age:</label>
<p><?php echo"$age"?></p>

<label>mobile:</label>
<p><?php echo"$mobile"?></p>
<a href="logout.php">click here to logout</a>

</body>

</html>