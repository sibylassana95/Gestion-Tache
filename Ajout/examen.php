<!DOCTYPE html>
<html>
<head>
	<title>formulaire </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
<form method="POST" class="form">
	Date:<input type="DATE" name="date" class="box-input"> <br>
	Semestre:<input type="number" name="semestre" class="box-input"><br>
    <input type="submit" value="VALIDER" name="valid" class="box-button1">	
    

</form>

<?php 
$date=$_POST['date'];
$semestre=$_POST['semestre'];
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
$requette="INSERT INTO examen(Date1,Semestre)VALUES('$date','$semestre')";
$execute=$connexion->query($requette);
	
}




 ?>
</div>
</body>
</html>