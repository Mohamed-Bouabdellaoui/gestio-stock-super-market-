<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="nav navbar-dark bg-primary">
        <div class="container-fluid">
            <h2 class=" text-center text-light">ajouter produit dans la base de donnée </h2>
        </div>
    </div>
    <br>
    <div class="container col-md-5 col-md-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading"> formulaire ajouter produit</div>
            <div class="panel-body">
                <form method="POST" action=" formulaire1.php">
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">libelle</label>
                        <div class="col-sm-10">
                            <input type="text" name="libelle" class="form-control">
                        </div>
                    </div><br>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">catigory</label>
                        <div class="col-sm-10">
                            <input type="text" name="catigory" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-sm-2 col-form-label">quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class=" col-sm-2 col-form-label">prix</label>
                        <div class="col-sm-10">
                            <input type="text" name="prix" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-sm-5 col-form-label">image</label>
                        <input type="text" name="image" class="form-centrol-file">
                    </div>
                    <div class="form-group row ">
                        <label class="col-sm-5 col-form-label"></label>
                        <input type="submit" name="btn" class="btn btn-primary">
                </form>
            </div>
            <a class="btn btn-primary" href="read.php">back to page</a>

        </div>
    </div>
    <?php
    if (isset($_POST['btn'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'my_db');
        $libe = $_POST['libelle'];
        $catigory = $_POST['catigory'];
        $quantity = $_POST['quantity'];
        $prix = $_POST['prix'];
        $img = $_POST['image'];
        $req = "insert into produit (libelle,catigory,prix,image,quantity) values('$libe','$catigory','$prix','$img','$quantity')";
        $resultat = mysqli_query($conn, $req);
        if ($resultat) {
            echo "sec";
        } else {
            echo "no";
        }
    }

    ?>


</body>