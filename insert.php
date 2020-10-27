<?php 
	$con = mysqli_connect("127.0.0.1","root","" , "shop");
	$sql = mysqli_query($con, "INSERT INTO things (name, description, cost, img) VALUES ('{$_GET['name']}','{$_GET['desc']}','{$_GET['cost']}' ,'{$_GET['img']}')");
	header("Location: index.php");
	
?>