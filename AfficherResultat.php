<?php
 require_once("connexionBD.php");
 $requeteProduit="select nom  from produit";
 $resultat=$pdo->query($requeteProduit);
 if(isset($_GET['s']) AND !empty($_GET['s'])){
     $recherche=htmlspecialchars($_GET['s']);
     $requete="SELECT idproduit,nomproduit,prix from produit  where nomproduit LIKE '%$recherche%'";
     $ResultatNom=$pdo->query($requete);
 }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat De La Recherche</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">
</head>
<body class="bg">
<div class="container mt-3 ">
  <table class="table table-hover table-light margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom Du Produit</th>
        <th>Prix</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     while($Produit=$ResultatNom->fetch()){?>
                                <tr>
                                    <td><?php echo $Produit['idproduit'] ?> </td>
                                    <td><?php echo $Produit['nomproduit'] ?> </td>
                                    <td><?php echo $Produit['prix'] ?> </td> 
                                    <td >
                                        &nbsp;&nbsp;
                                        <a style="text-decoration:none;"
                                            href="modéfierProduit.php?idproduit=<?php echo $Produit['idproduit'] ?>">
                                                <span class="bi bi-pencil-square"></span>

                                        </a>
                                        &nbsp;&nbsp;
                                        <a  style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer ce produit')"
                                            href="supprimerProduit.php?idproduit=<?php echo $Produit['idproduit'] ?>">
                                                <span class="bi bi-trash-fill"></span>
                                        </a>
                                    </td>  
                                </tr>
                            <?php } ?>
    
    </tbody>
  </table>
    </div>
</body>
</html>