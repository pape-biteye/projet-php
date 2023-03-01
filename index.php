<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'base');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		//echo 'connexion reussie! <br>';

		//requete SQL
		$req="select * from produit";
		//execution de la requete SQL
		$resultat=mysqli_query($conn, $req) or die(mysqli_error());

		//affichage du resultat(affichage formater)

?>
<html>
<head>
	<title>Ajouter un produit a la base</title>
    <link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container bg-info">
	<h1><center>Bien venue sur notre page d'Acceuill</center></h1>
    </div><br><br>
	<div align="center" class="text-white bg-success">
        <a href="affichage.php">Vous pouvez visiter nos tableaux de produit</a>
    </div><br>
    
    <div class="vav vavbar-dark bg-primary">
        <div class="container bg-success border border-warning">
            <h2 class="text-center"</h2>Mes images<br><br>
        </div>
        <marque>
        <nav class="navbar nav justify-content-center">
        <div class="container">

            <div class="row py-5">
                <?php
            while($ligne = mysqli_fetch_assoc($resultat)){
                ?>
            <div class="col-md-6 mx-auto py-5">
                <div class="card" style="width: 18rem;" >
                    <img src="image/<?php echo $ligne['img'];?>"  class="card-img-top"  alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $ligne['prix'];?>fr</h5>
                      <p class="card-text">des ceintures de haute qualite.</p>
                      <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                  </div>
            </div> 
        
        <?php
        }
    }
    ?>
            </div>
</div>
        </nav><br><br><br>
        <div class="vav vavbar-dark bg-primary">
            <div class="container-fluid bg-success" >
                <h class="text-center"><br>
                    <div class="container bg-success">
                    <h1><center>Formulaire</center></h1>
                    </div>
                    <form action="insere.php" method="post" enctype="multipart/form-data"  class= " border border bg-info">
                        <div class="container" div-justify-center border-hgeith>
                        <div class="form-row">
                            <div class="col-md-11 mb-4">
                                <label for="nom">nom</label>
                                <input type="text" class="form-control" name="nom" >
                            </div>
                        </div>
                        <div class="container" border-hgeith>
                            <div class="form-row">
                                <div class="col-md-11 mb-4">
                                    <label for="prix">prix</label>
                                    <input type="number" class="form-control" name="prix" >
                                </div>
                            </div>
                        </div>
                       <div class="container" border-hgeith>
                        <div class="form-row">
                            <div class="col-md-11 mb-4">
                                <label for="nom">descriptio</label>
                                <input type="text" class="form-control" name="descriptio" >
                            </div>
                        </div>
                        </div>
                        <div class="container" border-hgeith>
                            <div class="form-row">
                                <div class="col-md-11 mb-4">
                                    <label for="nom">categorie</label>
                                    <input type="text" class="form-control" name="categorie">
                                </div>
                            </div>
                        </div>
                        <div class="container" border-hgeith>
                            <div class="form-row">
                                <div class="col-md-11 mb-4">
                                    <label for="nom">img</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                            </div>
                        </div>
                        <div class="container" border-hgeith>
                        <input type="submit" value="Ajo&ugrave;ter">&nbsp; &nbsp; 
                        <input type="reset" value="Effacer">
                        </div>
                        </form>
                    </div>
        <div class="container text-center">
            <button type="button" class="btn btn-lg bg-primary m-2"><a href="formulaire.html" class="text-white"></a>vous pouvez visiter nos pages</a></button>
        </div>
    
        
    </body>
    <html>