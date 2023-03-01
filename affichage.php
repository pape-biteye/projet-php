<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>formulaire</title>
</head>
<body>
<div align="center" class="text-white bg-success">
<a href="index.php">Vous pouvez visiter nos pages d'Acceuil</a>
</div>
	<div class="container" bg-success>
<<div class="container-fluid bg-success" >
    <div class="container border border bg-prymary">
		
<div class="container my-5 bg-light">
<center><h2>liste des clients</center></h2>
<a class="btn btn-primary" href="/myshop/create.php" role="button">nouveau client</a>
</div>
<br>

	
</div>







<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'base');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		echo 'connexion reussie! <br>';

		//requete SQL
		$req="select * from produit";
		//execution de la requete SQL
		$resultat=mysqli_query($conn, $req) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border class='container-fluid bg-light' >";
		echo "<tr> <th>id</th><th>nom</th><th>prix</th><th>descriptio</th><th>categorie</th><th>img</th><th colspan='4' aligne='center'>Action</th>
		
		</tr>";
		while($ligne = mysqli_fetch_assoc($resultat)){
			echo "<tr>";
			echo "<td>".$ligne['id']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['prix']."</td>
			<td>".$ligne['descriptio']."</td>
			<td>".$ligne['categorie']."</td>
			<td>".$ligne['img']."</td>
            <td><a class='btn btn-danger btn-sm' href='supprimer.php?var=".$ligne['id']."'>supprimer</a></td>
			<td><a class='btn btn-success btn-sm' href='show.php.php?var=".$ligne['id']."'>show</a></td>
			<td><a class='btn btn-info btn-sm' href='form_modifier.php?var=".$ligne['id']."'>modifier</a></td>";
			echo "</tr>";
		}
			echo "</table>";
}//fin du else
?>
</tbody>
</div>
</div>
</table>
</body>
</html>


