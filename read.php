<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.card-body {
			text-align: center;

		}
	</style>
</head>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'my_db');
$req = "select distinct catigory from produit";
$res = mysqli_query($conn, $req);
while ($row = mysqli_fetch_assoc($res)) {
?>

	<div class="card mx-auto mt-5  " style="width: 50rem;">
		<div class="card-body ">
			<h5 class="card-title"><?= $row['catigory'] ?></h5>
			<a href="categorie1.php?catigory=<?= $row['catigory'] ?>" class="btn btn-primary">discover produit</a>
		</div>
	</div>

<?php } ?>
<div class="d-flex flex-row  justify-content-center ">
	<form class="m-5" action="formulaire.php">
		<a href="formulaire1.php" class="btn btn-primary" type="submit" name> ajouter produit </a>
	</form>
</div>



</html>