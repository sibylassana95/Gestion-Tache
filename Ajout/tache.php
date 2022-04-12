<!DOCTYPE html>
<html>
<head>
	<title>formulaire </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
<form method="POST" class="form">
	Type de tache:<input type="text" name="typedetache" class="box-input"> <br>
	Matiere:<input type="text" name="matiere" class="box-input"><br>
	Date:<input type="DATE" name="date" class="box-input"><br>
	Heure:<input type="time" name="heure" class="box-input"><br>
    <input type="submit" value="VALIDER" name="valid" class="box-button1">	
    

</form>

<?php 
$tache=$_POST['typedetache'];
$matiere=$_POST['matiere'];
$date=$_POST['date'];
$heure=$_POST['heure'];
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

//requette insertion 
$requette="INSERT INTO tache(Type_de_tache,Nom_matiere,Date1,Heure)VALUES('$tache','$matiere','$date','$heure')";
$execute=$connexion->query($requette);
	
}




 ?>
</div>
</body>
</html>