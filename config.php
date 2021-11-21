<?php
$con = mysqli_connect("localhost","root","") or die ("Error connection ");
$db = mysqli_select_db($con, "testdb") or die ("Error connection "); 
?>