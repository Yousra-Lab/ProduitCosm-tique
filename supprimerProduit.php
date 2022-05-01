<?php 
     require_once("connexionBD.php");
     $idproduit=isset($_GET['idproduit'])?$_GET['idproduit']:0;
     $requete="delete from produit  where idproduit=?";
     $params=array($idproduit);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:produits.php');
?>