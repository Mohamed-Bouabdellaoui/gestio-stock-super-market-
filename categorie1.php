<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        overflow-x: hidden;
    }
</style>

<body>
    <div class="row">
        <?php


        $conn = mysqli_connect('localhost', 'root', '', 'my_db');
        if (isset($_GET['catigory'])) {
            $cat = $_GET['catigory'];
            $req = "select * from produit WHERE catigory='$cat'";
            $res = mysqli_query($conn, $req);
            while ($row = mysqli_fetch_assoc($res)) {
        ?>

                <div class="card col-4" style="width: 18rem;">
                    <img src="<?= $row['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">name:<?= $row['libelle'] ?></h5>
                        <p class="card-text">prix:<?= $row['prix'] ?></p>
                        <p class="card-text">quantity:<?= $row['quantity'] ?></p>
                        <a href="./update.php?libelle=<?= $row['libelle'] ?>" class="btn btn-primary">update</a>
                        <a href="./delete.php?id=<?= $row['id']; ?> & $catigorie=<?= $row['catigory'] ?>" class="btn btn-primary">delete</a>
                    </div>
                </div>


        <?php }
        } ?>
    </div>
    <div class="d-flex flex-row  justify-content-center ">
        <form class="m-5" action="formulaire.php">
            <a href="formulaire1.php" class="btn btn-primary" type="submit" name> ajouter produit </a>
        </form>
    </div>
    <a class="btn btn-primary " href="read.php">back to page</a>

</body>

</html>