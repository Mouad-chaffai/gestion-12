<?php
// faire appel a la base de donnees

require_once 'bd.php';

$stmt = $pdo->query('SELECT * FROM produit');
// supprmer les produits
if(isset($_REQUEST['del']))
{
    $sup = intval($_GET['del']);

    $sql = "DELETE FROM produit WHERE id_produit=:id_produit";
    $query = $pdo->prepare($sql);
    $query ->bindParam(':id_produit', $sup , PDO::PARAM_STR);
    $query ->execute();
    echo "<script> window.location.href='produit.php' </script>";
}
//fin supprimer
// ajouter un produit depuis le formulaire 

if (
    isset($_POST['ajouter']) && !empty($_POST['reference'])
    && !empty($_POST['libelle'])
    && !empty($_POST['prix_unitaire'])
    && !empty($_POST['quantite_min'])
    && !empty($_POST['quantite_stock'])
    && !empty($_POST['categorie'])

) {
    $reference = $_POST['reference'];
    $libelle = $_POST['libelle'];
    $prix_unitaire = $_POST['prix_unitaire'];
    $quantite_min = $_POST['quantite_min'];
    $quantite_stock = $_POST['quantite_stock'];
    $categorie = $_POST['categorie'];

    // pour l'image ya bouceaup de chose a jouter 
    // je laisse le code dans un lien dans la descreption 

    $images = $_FILES['profile']['name'];
    $tmp_dir = $_FILES['profile']['tmp_name'];
    $imageSize = $_FILES['profile']['size'];
    // creer un dossier nommer le uplods 
    // pour stocker nos images
    $upload_dir = 'uploads/';
    $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
    $picProfile = rand(1000, 1000000) . "." . $imgExt;
    move_uploaded_file($tmp_dir, $upload_dir . $picProfile);

    $sql = "INSERT INTO produit(reference,   libelle, prix_unitaire, quantite_min, quantite_stock, images, categorie)
         VALUES (:reference, :libelle, :prix_unitaire, :quantite_min, :quantite_stock, :pic, :categorie)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':reference', $reference);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->bindParam(':prix_unitaire', $prix_unitaire);
    $stmt->bindParam(':quantite_min', $quantite_min);
    $stmt->bindParam(':quantite_stock', $quantite_stock);
    $stmt->bindParam(':pic', $picProfile);
    $stmt->bindParam(':categorie', $categorie);

    $stmt->execute();
    header('Location:produit.php');
}
$stmt = $pdo->query('SELECT * FROM produit');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <title>Gestion de Stock</title>
</head>

<body>
    <?php require_once 'Home_page.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="produit.php" class="form-group mt-3" method="POST" enctype="multipart/form-data">
                    <label for="">Image du Produit :</label>
                    <input type="file" class="form-control mt-3" name="profile" accept="*/image">

                    <label for="">ID :</label>
                    <input type="text" class="form-control mt-3" name="reference" required>

                    <label for="">Product name :</label>
                    <input type="text" class="form-control mt-3" name="libelle" required>

                    <label for="">prix unitaire :</label>
                    <input type="text" class="form-control mt-3" name="prix_unitaire" required>

                    <label for="">quantite min :</label>
                    <input type="text" class="form-control mt-3" name="quantite_min" required>

                    <label for="">quantite stock :</label>
                    <input type="text" class="form-control mt-3" name="quantite_stock" required>

                    <label for="">categorie :</label>
                    <input type="text" class="form-control mt-3" name="categorie" required>
                  <button type="submit" class="btn btn-primary mt-3" name="ajouter">Enregistrer</button>
                </form>
            </div>
            <div class="col-8 mt-3">
                <table class="table table-striped">
                    <thead>
                        <th>Image</th>
                        <th>ID</th>
                        <th>Product name</th>
                        <th>prix unitaire</th>
                        <th>quantite min</th>
                        <th>quantite stock</th>
                        <th>categorie</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row =  $stmt->fetch()) {
                        ?>

                            <tr>
                                <td><img src="./uploads/<?php echo $row->images; ?>" alt=" " class="image_product"  ></td>
                                <td><?php echo $row->reference; ?> </td>
                                <td><?php echo $row->libelle; ?> </td>
                                <td><?php echo $row->prix_unitaire; ?> </td>
                                <td><?php echo $row->quantite_min; ?> </td>
                                <td><?php echo $row->quantite_stock; ?> </td>
                                <td><?php echo $row->categorie; ?> </td>
                                <td>

<a href="update.php?id_produit=<?php echo $row->id_produit;?>"><dutton class="btn btn-primary"><i class="fas fa-edit"></i></dutton></a>
<a href="produit.php?del=<?php echo $row->id_produit;?>"><dutton class="btn btn-danger" onclick="return confirm('voulez vous vraiment supprimer')"><i class="fas fa-trash"></i></dutton></a>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
