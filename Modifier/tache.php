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
	Type de tache:<input type="text" name="typedetache" class="box-input"> <br>
	Matiere:<input type="text" name="matiere" class="box-input"><br>
	Date:<input type="DATE" name="date" class="box-input"><br>
	Heure:<input type="time" name="heure" class="box-input"><br>
    <input type="submit" value="MODIFIER" name="valid" class="box-button1">	
    

</form>

<?php 
$id=$_POST['idnumb'];
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

//requette Modifier
	$requette="UPDATE tache SET Type_de_tache='$tache',Nom_matiere='$matiere',Date1='$date',Heure='$heure' WHERE id='$id'";
$execute=$connexion->query($requette);
	
}




 ?>
</div>
</body>
</html>