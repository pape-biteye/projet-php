<?php
//recuperations de id transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'base');
$requete = "SELECT * FROM produit WHERE id =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);
//var_dump($ligne);
echo "recuperation effectuer <h1>" .$ligne['id']."</h1>";
echo "<h1>" .$ligne['nom']. "</h1>";
echo "<h1>" .$ligne['prix']. "</h1>";
echo "<h1>" .$ligne['descriptio']. "</h1>";
echo "<h1>" .$ligne['categorie']. "</h1>";
echo "<h1>" .$ligne['img']. "</h1>";
echo "<a href='affichage.php>retourner au formulaire</a><br>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
    <img src="image/<?php echo $ligne['images'];?>">
</body>
</html>








?>