
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/magazin/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Form</title>

    <title>Inscription Form</title>

</head>
<body>
    

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
        </div>
        <div class="container">
            <div class="form">
                    <h2>Login Form</h2>
                        <form action="inscription.php" method="post">
                        <div class="inputBox" name= "nom_user">
                            <input type="text" placeholder="nom" name="nom_user">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Prenom" name="prenomr">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Email" name="login_user">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Password" name="password_user">
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="cPassword" name="confirmer_password">
                        </div>

                        <div class="inputBox">
                            <input type="submit" value="Inscription"name= "inscription" >
                        </div>
                        
                    </form>
                </div>
            </div>
    </section>


    <script src="./index.js"></script>



<scri src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></scri>

</body>
</html>



<?php 

//verification
// require_once ("connexion.php");

$servername = 'localhost';
$username = 'root';
$password = '';
$sql = "mysql:host=localhost;dbname= magazin";


//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=localhost;dbname=magazin","root","" );
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}


if(isset($_POST['inscription']))
{

$nom_user=$_POST['nom_user'];
$prenomr=$_POST['prenomr'];
$login_user=$_POST['login_user'];
$password_user=$_POST['password_user'];
$confirmer_password=$_POST['confirmer_password'];


$req=$conn->prepare("INSERT INTO users(nom_user,prenomr,login_user,password_user,confirmer_password)VALUE (?,?,?,?,?)");
$req->execute(array($nom_user,$prenomr,$login_user,$password_user,$confirmer_password));

// if(!empty($nom_user) AND !empty($prenomr) AND !empty($login_user) AND !empty($password_user) AND !empty($confirmer_password))
// {
    
// }
// else{
//     echo "veillez remplir les champs vide!!!";
// }


}


?>