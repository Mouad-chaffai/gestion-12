<!DOCTYPE html>
<html lang="en">
    <head>
            <!-- importer le fichier de style -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/2b7b8fc70a.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    </head>
<body>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'mouad') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM produit WHERE categorie='Jus de fruits'") or die($mysqli->error);
    ?> 
    <div class="container-fluid">
        <table class="table">
            <thead class="text-center">
                <tr>
                <th class="CN">ID</th>
                    <th class="CN">Product name</th>
                    <th class="CN">Product price</th>
                    <th class="CN">Store quantity</th>
                    <th class="CN">Stock quantity</th>
                    <th class="CN">Product image</th>
                    <th class="CN">Product categorie</th>
                </tr>
            </thead>
            <tbody class="text-center"> 
                <?php
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                ?>       
                        <tr>    
                            <td><?php echo $row['reference']?></td>
                            <td><?php echo $row['libelle']?></td>
                            <td><?php echo $row['prix_unitaire']?></td>
                            <td><?php echo $row['quantite_min']?></td>
                            <td><?php echo $row['quantite_stock']?></td>
                            <td><img src="<?php echo "images/".$row['images'];?>" width="60px" alt="image"></td>
                            <td><?php echo $row['categorie']?></td>
                        </tr>  
                <?php            
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!--------------------------------------Bootstrap CDN------------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>