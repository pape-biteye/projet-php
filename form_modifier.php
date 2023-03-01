<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>formulaire</title>
</head>



<?php
//recuperations de cni transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'base');
$requete = "SELECT * FROM produit WHERE id =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);
?>

<h3> Modification des donnes de produit <?php echo $ligne['id']; ?> </h3>

<!--Creation du formulaire dynamique et prechargement des donnees-->
<form action="modifier.php" method="post" class="container justify-content-center border border bg-dark">
	<input type="hidden" name="id" 
	value="<?php echo $ligne['id'];?>"><br>;
	<input type="text" name="nom" 
	value="<?php echo $ligne['nom'];?>"><br>;
	<input type="text" name="prix" 
	value="<?php echo $ligne['prix'];?>"><br>;
	<input type="text" name="descriptio" 
	value="<?php echo $ligne['descriptio'];?>"><br>;
	<input type="text" name="categorie" 
	value="<?php echo $ligne['categorie'];?>"><br>;
	<input type="text" name="img" 
	value="<?php echo $ligne['img'];?>"><br>;
	<input type="submit" value="Enregistrer">
	<input type="reset" value="Annuler">
</form>