<?php
$con= new mysqli('localhost','root','','exam')or die("Could not connect to mysql".mysqli_error($con));
echo '<script>console.log("Welcome to db 2nd line!"); </script>'; 
//echo $con;
?>