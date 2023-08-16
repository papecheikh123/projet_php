<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/magazin/param.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php-mysql</title>
</head>
<body>

<div class="container-fluid ">
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><h1>FORMULAIRE D'AJOUT DE PRODUIT</h1></a>
    </div>
  </nav>
</div>






<div class="ajout_form">

		<div class="formulario">			
      <h1>Ajout produit</h1>
				<h3>Ajouter un produit dans la boutique</h3>


					<form action="" method="post">				

						
								<p>
									<label for="nome" class="colocar_nome">Nom produit
										<span class="obrigatorio">*</span>
									</label>
										<input type="text" name="nom_produit" autocomplete="off"">
								</p>
							
								<p>
									<label for="email" class="colocar_email">prix produit
										<span class="obrigatorio">*</span>
									</label>
										<input type="text"name="prix_produit"autocomplete="off">
								</p>
						
								<p>
									<label for="telefone" class="colocar_telefone">quatite produit
                  <input type="number" min="1" name="qte_produit"autocomplete="off">

									</label>
                </p>

                  <button type="submit" class="btn btn-danger" name="enregistrer">Enregistrer</button><br>



								
                  					
						
					</form>
		</div>	
	</div>





<div class="des"></div>


   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php 
//verification
require_once ("connexion.php");
if(isset($_POST['enregistrer']))
{

$nom_produit=$_POST['nom_produit'];
$prix_produit=$_POST['prix_produit'];
$qte_produit=$_POST['qte_produit'];

if(!empty($nom_produit) AND !empty($prix_produit) AND !empty($qte_produit))
//filtre
{

    if(strlen($nom_produit<5))
    {
        echo "le nom du produit doit contenir au moin 5 caracteres";
    }
    else
    //requette
    
    {
        $req=$conn->prepare("INSERT INTO produit(nom_produit,prix_produit,qte_produit) value(?,?,?)");
        $req->execute(array($nom_produit,$prix_produit,$qte_produit));

        if($req){echo "enregistrement effectuer avec succes"; }
        header("Location:afficher.php");
    }

}
else{
    echo "veillez remplir tous les champs SVP!";
}

}

?> 