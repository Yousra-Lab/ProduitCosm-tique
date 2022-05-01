<?php
 require_once("connexionBD.php");
 $requeteProduit="select nom  from produit";
 $resultat=$pdo->query($requeteProduit);
 if(isset($_GET['s']) AND !empty($_GET['s'])){
     $recherche=htmlspecialchars($_GET['s']);
     $requete="SELECT idproduit,nomproduit,prix  from produit where nomproduit LIKE '%$recherche%'order by idproduit ";
     $ResultatNom=$pdo->query($requete);
 }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Des Produits</title>
    <link rel="stylesheet" href="../design.css">
</head>
<body>
    <form method="GET" action="AfficherResultat.php">
        <input type="search" id="search" name="s" placeholder="Tapez Le Nom Du Produit A Rechercher" >
        <button style="background-color: rgb(195, 196, 197); 
 border: 3px solid rgb(195, 196, 197);
  border-radius: 5px;
  height: 35px;">Chercher..</button>
    </form>
</body>
</html>