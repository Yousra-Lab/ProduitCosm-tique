

<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title >Ajouter Un Produit</title>

  </head>
<body>
<h2 class=" text-center margintop50  ">Ajouter Un Produit</h2>

  <div class="container col-sm-4">
<form method="POST" action="insertproduit.php "> 
  <div class="formll">
<div >
              <label class="form-label">Nom Du Produit :</label>
              <input name="nomproduit" type="text" class="form-control"  required>
</div><br>
<div >
              <label class="form-label">Prix :</label>
              <input name="prix" type="text" class="form-control"  required>
</div><br>
</div>

          <br>
          <button  class="w-100 btn btn-lg btn-primary " type="submit">Ajouter</button>
</form>

</div>
  </body>
</html>































