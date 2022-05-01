<?php 
     require_once("connexionBD.php");
     $idproduit=isset($_POST['idproduit'])?$_POST['idproduit']:"";
     $prix=isset($_POST['prix'])?$_POST['prix']:"";
     $nom=isset($_POST['nomproduit'])?$_POST['nomproduit']:"";
     $requete="update produit set nomproduit=?, prix=? where idproduit=?";
     $params=array($nom,$prix,$idproduit);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:produits.php');
?>