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
	Date:<input type="DATE" name="date" class="box-input"> <br>
	Semestre:<input type="number" name="semestre" class="box-input"><br>
    <input type="submit" value="MODIFIER" name="valid" class="box-button1">	
    

</form>

<?php 
$id=$_POST['idnumb'];
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
$requette="UPDATE examen SET Date1='$date',Semestre='$semestre' WHERE id='$id'";
$execute=$connexion->query($requette);
	
}




 ?>
</div>
</body>
</html>