<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<title>MyShop</title>
</head>
<body>
    <<div class="container-fluid bg-success" >
    <div class="container border border bg-prymary">
<div class="container my-5 bg-info">
<center><h2>liste des clients</center></h2>
<a class="btn btn-primary" href="/myshop/create.php" role="button">nouveau client</a>
</div>
<br>
<table class="table table-bordered bg-warning">
    <thead>
        <hr>
        <th>id</th>
        <th>nom</th>
        <th>prix</th>
        <th>descriptio</th>
        <th>categorie</th>
        <th>img</th>
        <td colspan="2" aligne="center">Action</td>
        
</div>
    
    </thead>
    <tbody>
</div>

    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $database="base";

        //create connexion
        $connection = new mysqli($servername, $username, $password, $database);

        //check connexion
        if ($connection->connect_error) {
            
         die ( "connection failed:" .$connection->connect_error);
         
        }

         //read all rows from database table
        $sql = "SELECT * from produit";
        $result = $connection-> query($sql);

        if(!$result) {
         die ( "invalid query:" .$connection->connect_error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
        <td>$row[id]</td>
        <td>$row[nom]</td>
        <td>$row[prix]</td>
        <td>$row[descriptio]</td>
        <td>$row[categorie]</td>
        <td>$row[img]</td>
        
        <td>
            <a class='btn btn-danger btn-sm' href='/myshop/modifier.php?id=$row[id]'>modifier</a>
            <a class='btn btn-info btn-sm' href='/myshop/supprimer.php?id=$row[id]'>supprimer</a>
        </td>
        </tr>
            ";
        }


    ?>
    </div>
        
    </tbody>

</table>
    




    
</body>
</html>