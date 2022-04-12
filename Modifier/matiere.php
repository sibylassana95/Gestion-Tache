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
	Nom Matiere:<input type="text" name="matiere" class="box-input"> <br>
	Nom Enseignant:<input type="text" name="enseignant" class="box-input"><br>
	Coefficient:<input type="number" name="coefficient" class="box-input"><br>
    <input type="submit" value="MODIFIER" name="valid" class="box-button1">	
    

</form>

<?php
$id=$_POST['idnumb']; 
$matiere=$_POST['matiere'];
$enseignant=$_POST['enseignant'];
$coefficient=$_POST['coefficient'];
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
$requette="UPDATE matiere SET Nom_matiere='$matiere',Nom_enseignant='$enseignant',Coefficient='$coefficient' WHERE id='$id'";
$execute=$connexion->query($requette);
	
}




 ?>
</div>
</body>
</html>