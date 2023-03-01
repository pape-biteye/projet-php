<?php 
//recuperation des donnees du fromulaire
 
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$descriptio = $_POST['descriptio'];
$categorie = $_POST['categorie'];

//ajout image
$imgname=$_FILES['image']['name'];

$targetDir = "image/";                       
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;     
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
//-------------------------- ------------- -------------------

//move_uploaded_file($imgname, 'image/'.$imgname);

//var_dump($imgname);

//connexion au serveur de BD de la base
$conn = mysqli_connect('localhost', 'root', '', 'base');
//creation de la requete SQL pour inserer les donnes
$req="INSERT INTO produit(nom, prix, descriptio, categorie, img)VALUES
( '$nom', '$prix', '$descriptio', '$categorie', '$imgname')";
	echo $req. '<br>';
//execution de la requete
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));
if($resultat){
	echo "Insertion reussie! <br>";
	echo "<a href='affichage.php'>Afficher la liste?</a>";
	echo "<a href='Acceuil.html'>Inserer un autre produit</a>";
}


?>