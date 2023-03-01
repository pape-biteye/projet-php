<?php 
$id =$_GET['var'];
//Connexion au serveur de BD
$conn = mysqli_connect('localhost', 'root', '', 'base');
//Creation de la requete de suppression 
$req ="DELETE FROM produit WHERE id =$id";
//echo "<br>$req";
$resultat = mysqli_query($conn, $req)or die(mysqli_error($conn));
if($resultat){
	echo "Suppression reussie! <br>";
	echo "<a href='affichage.php'>Afficher la liste</a><br>";
}
else{
	echo " Echec de la Suppression ";
}
?>