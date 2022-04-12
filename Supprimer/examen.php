<!DOCTYPE html>
<html>
<head>
	<title>formulaire </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
<form method="POST" class="form">
	Id:<input type="number" name="idnumb" class="box-input"><br>
    <input type="submit" value="VALIDER" name="valid" class="box-button1">	
    

</form>

<?php 
$id=$_POST['idnumb'];
$valider=$_POST['valid'];


$host='localhost';
$dbname='gestionDesTache';
$username='root';
$password='siby';
    
try{
  $connexion=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
  

}
catch(PDOException $e){
  die("impossible de se connecter à la base:" .$e->getMessage());
}

if (isset($valider)) {

//requette Supprimer
$requette = "DELETE FROM examen WHERE id='$id'";
$execute=$connexion->query($requette);
	
}
?>

<div>
     <?php


       $mysqli = new mysqli("127.0.0.1","root", "siby", 'gestionDesTache');
 $requete = "SELECT * FROM examen " ;
   $resultat = $mysqli->query($requete);

  echo "<table border=\"1\"class=\"table\"style=\"border-collapse:collapse;text-align:center;\">

       <tr>

      <th>ID</th>
       <th> Date</th>
        <th> Semestre</td>
       
       
    </tr>";
  while ($ligne = $resultat->fetch_assoc()) {




echo "
 <tr>

      <td>".$ligne['id']." </td>
      <td>".$ligne['Date1']." </td>
      <td>".$ligne['Semestre']." </td>
   
         </tr>";


     }
  ?>
</table>
</div>
</div>
</body>
</html>