<!DOCTYPE html>
<html>
<head>
	<title>formulaire </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container">
<?php


       $mysqli = new mysqli("127.0.0.1","root", "siby", 'gestiondestache');
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
      <td>".$ligne['Date']." </td>
      <td>".$ligne['Semestre']." </td>
   
         </tr>";


     }
  ?>
</table>
</div>
</body>
</html>