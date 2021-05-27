<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
    require_once('./db_conn.php');
    if (isset($_GET['libelle'])) {
        $libelle = $_GET['libelle'];
        $reqModslc = "SELECT * FROM produit WHERE libelle='$libelle'";
        $resul = mysqli_query($conn, $reqModslc);
        $rows = mysqli_fetch_assoc($resul);


        if (isset($_POST['btn'])) {

            $libelle = $_GET['libelle'];

            $quantity = $_POST['quantity'];
            $reqUpd = "UPDATE produit SET prix='$prix' WHERE libelle='$get'";
            $resultat = mysqli_query($conn, $reqUpd);
            if ($resultat) {
                header("location:./categorie1.php?produit=$category");
            } else {
                echo "Echec de modification des Données";
            }
        }
    }


    ?>
    <div class="nav navbar-dark bg-primary">
        <div class="container-fluid">
            <h2 class=" text-center text-light">modifier produit dans la base de donnée </h2>
        </div>
    </div>
    <br>
    <div class="container col-md-5 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading"> formulaire modifier produit</div>
            <div class="panel-body">
                <form method="" action="update.php">
                    <div class="form-group row ">


                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">libelle</label>
                        <div class="col-sm-10">
                            <input type="text" name="libelle" class="form-control" value="<?php echo $rows['libelle']; ?>">
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">catigory</label>
                        <div class="col-sm-10">
                            <input type="text" name="catigory" class="form-control" value="<?php echo $rows['catigory']; ?>">
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control" value="<?php echo $rows['quantity']; ?>">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">prix</label>
                        <div class="col-sm-10">
                            <input type="text" name="prix" class="form-control" value="<?php echo $rows['prix']; ?>">
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">image</label>
                        <div class="col-sm-10">
                            <input type="text" name="image" class="form-control" value="<?php echo $rows['image']; ?>">
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-5 col-form-label"></label>
                        <a href="categorie1.php"> <input type="submit" name="btn" class="btn btn-primary"></a>
                    </div>
                </form>
                <a class="btn btn-primary" href="read.php">back to page</a>
            </div>

        </div>


</body>

</html>