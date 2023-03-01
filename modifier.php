<?php
//recuperation des donnees du formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$descriptio = $_POST['descriptio'];
$categorie = $_POST['categorie'];
$img = $_POST['img'];

//connexion a la BD et execution  de la requete de mise a jour
$conn = mysqli_connect('localhost', 'root', '', 'base');
$req="UPDATE  produit
		SET nom = '$nom',
		prix = '$prix',
		descriptio = '$descriptio',
		categorie = '$categorie',
		img = '$img'
		WHERE id = $id";
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));

echo "Modification effectuer <br>";
echo "<a href='affichage.php'>retourner a la liste</a><br>";
?>