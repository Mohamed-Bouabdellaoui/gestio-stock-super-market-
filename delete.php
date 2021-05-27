<?php
require_once('./db_conn.php');

$id = $_GET['id'];
$catigorie = $_GET['catigorie'];
$sql = "DELETE FROM produit WHERE id='$id'";
$result = mysqli_query($conn, $sql);
header("location:categorie1.php?produit=$catigorie");
echo $catigory;
