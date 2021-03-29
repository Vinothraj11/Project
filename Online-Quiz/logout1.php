<?php 
session_start();
if(isset($_SESSION['email'])){
	echo '<script>console.log("Welcome to over1!"); </script>';
session_destroy();}
$ref= @$_GET['q'];
header("location:admin.php");
?>