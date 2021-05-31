<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div id="content">
         <!--------------------------Navbar----------------------------->   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LOGO HERE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="col-sm-3"></div>
                <ul class="navbar-nav col-sm-6">
                    <li class="nav-item ">
                        <a class="nav-link mx-5" href="http://localhost/phpsql/produit.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="./categories_page.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linK mx-5 text-success" href="Home_page.php?deconnexion=true">logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-------------------------------Cards-------------------------------------->
        <div class="container-fluid">
            <div class="d-flex row m-0 p-0 justify-content-center mx-5 my-5">
                <div class="mx-5">
                    <h2 class="CN">Les produits laitiers</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="./img/lait.gif" alt="Card image" style="width:100%">
                        <div class="card-body">

                            <a href="lait.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="mx-5">
                    <h2 class="CN">Jus de fruits</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="./img/fruit1.gif" alt="Card image" style="width:100%">
                        <div class="card-body">
   
                            <a href="jus.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex row m-0 p-0 justify-content-center mx-5 my-5">
                <div class="mx-5">
                    <h2 class="CN">Vêtements</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="./img/CLOUDS.gif" alt="Card image" style="width:100%">
                        <div class="card-body">
                            
                            <a href="vetment.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="mx-5">
                    <h2 class="CN">légumes et fruits</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="./img/fruit1.gif" alt="Card image" style="width:100%">
<div class="card-body">
    
                            <a href="fruit.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logout Conditions -->
            <!-- <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];

                }
            ?> -->
           
        </div>
         <!--------------------------------------Bootstrap CDN------------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>