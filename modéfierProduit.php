
<?php 
 require_once('connexionBD.php');
 $idproduit=isset($_GET['idproduit'])?$_GET['idproduit']:0;
 $requete="select * from produit where idproduit=$idproduit";
 $resultat=$pdo->query($requete);
 $produit=$resultat->fetch();
 $nom=$produit['nomproduit'];
 $prix=$produit['prix'];

?>

<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modéfier Un Produit</title>

  </head>

<body class="bg">
<h2 class="text-center margintop50">Modéfier Un Produit</h2>
<div class="container col-sm-4">
<form method="POST" action="updateproduit.php">
  <div class="forml">
<div>
              <label class="form-label">Idproduit : <?php echo $produit['idproduit'] ?></label>
              <input name="idproduit" type="hidden" class="form-control" value="<?php echo $idproduit?>" required>
            </div><br>
<div>
              <label class="form-label">Nom Du Produit :</label>
              <input name="nomproduit" type="text" class="form-control" value="<?php echo $nom ?>"required>
</div><br>
<div>
              <label class="form-label">Prix :</label>
              <input name="prix" type="text" class="form-control" value="<?php echo $prix ?>"required>
</div><br>
  </div>
<div >
          <br>
          <button class="w-100 btn btn-lg btn-success" type="submit">Modéfier</button>
</form>
</div>

  </body>
</html>