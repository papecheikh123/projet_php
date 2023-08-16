<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>affichage</title>
</head>
<body>
<div class="container-fluid ">
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><h1>La liste de tous nos produits</h1></a>
    </div>
  </nav>
</div>



<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">prix du produit</th>
      <th scope="col">quantite produit</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <?php 
require_once("connexion.php");
$req=$conn->query("SELECT * FROM produit");
while($aff=$req->fetch()){?>

  
    <tr>
      <th scope="row">1</th>
      <td> <?php  echo $aff['id'] ;?></td>
      <td><?php  echo $aff['nom_produit']?>;</td>
      <td><?php  echo $aff['prix_produit'];?></td>
      <td><?php  echo $aff['qte_produit'];?></td>
      <td>
        <a href="suprimer.php?id=<?php echo $aff['id']?>">suprimer</a></td>

    </tr>
    
    
    <?php
}
?>

</table>










<table>

<th>ID</th>
<th>Nom du produit</th>
<th>prix du produit</th>
<th>quantite produit</th>
<th>action</th>

<?php 
require_once("connexion.php");
$req=$conn->query("SELECT * FROM produit");
while($aff=$req->fetch()){?>




<tr>
    <td> <?php  echo $aff['id'] ;?></td>
    <td> <?php  echo $aff['nom_produit'];?></td>
    <td> <?php  echo $aff['prix_produit'];?></td>
    <td> <?php  echo $aff['qte_produit'];?></td>
    <td>
        <a href="suprimer.php?id=<?php echo $aff['id']?>">suprimer</a>

    </td>
</tr>
<?php
}
?>


</table>
    
</body>
</html>