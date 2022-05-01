<?php 
     require_once("connexionBD.php");
     $nom=isset($_POST['nomproduit'])?$_POST['nomproduit']:"";
     $prix=isset($_POST['prix'])?$_POST['prix']:"";
     $requete="insert into produit(nomproduit,prix)values(?,?)";
     $params=array($nom,$prix);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:produits.php');
?>