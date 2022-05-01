
<?php 
    require_once("connexionBD.php");

    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    $count="select count(*) countp from produit";
    $resultatcount=$pdo->query($count);
    $tabcount=$resultatcount->fetch();
    $nbrclients=$tabcount['countp'];
      
    $reste=$nbrclients % $size;   // % operateur modulo: le reste de la division 
                                //euclidienne de $nbrFiliere par $size
    if($reste===0) //$nbrFiliere est un multiple de $size
       $nbrPage=$nbrclients/$size;   
    else
      $nbrPage=floor($nbrclients/$size)+1;  // floor : la partie entière d'un nombre décimal
      $offset=($page-1)*$size;
     $requeteProduit="select idproduit,nomproduit,prix from produit order by idproduit limit $size
     offset $offset";
    $resultatProduit=$pdo->query($requeteProduit);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">

</head>
<body class="bg">
<div class="container mt-3 ">
  <br>
  <span><h2>Listes Des Produits</h2></span><?php include("Recherche.php");?>
  <br></br><h4>
      <a  style="text-decoration:none;"href="AjouterProduit.php">
      <span class="bi bi-plus-lg" > Ajouter Un Produit</span>
        </a>
    </h4> 
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
    <?php while($Produit=$resultatProduit->fetch()){?>
                                <tr>
                                    <td><?php echo $Produit['idproduit'] ?> </td>
                                    <td><?php echo $Produit['nomproduit'] ?> </td>
                                    <td><?php echo $Produit['prix'] ?> $ </td> 
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
<div>
              <ul class="pagination ">
                        <?php for($i=1;$i<=$nbrPage;$i++){ ?>
                            <li class="<?php if($i==$page) echo "page-item active" ?>"> 
                               <a class="page-link" href="produits.php?page=<?php echo $i;?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
                    </ul>
                </div>
    &nbsp;
    
</div>
</div>


</body>
</html>