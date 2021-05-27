<?php 

if (isset($_POST['creat'])) {
	include "../db_conn.php";

	$name = validate($_POST['libele']);
	$email = validate($_POST['prix']);
    $ima = validate($_POST['image']);




       $sql = "INSERT INTO users(email,password,$ima) 
               VALUES('$name', '$email')";
       $result = mysqli_query($conn, $sql);
    
}


