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
 $requete = "SELECT * FROM tache" ;
   $resultat = $mysqli->query($requete);

  echo "<table border=\"1\"class=\"table\"style=\"border-collapse:collapse;text-align:center;\">

       <tr>

      <th>ID</th>
      <th> Type de tache</th>
       <th> Nom matiere</th>
        <th> Date</th>
        <th> Heure</th>

       
       
    </tr>";
  while ($ligne = $resultat->fetch_assoc()) {




echo "
 <tr>

      <td>".$ligne['id']." </td>
      <td>".$ligne['Type_de_tache']." </td>
      <td>".$ligne['Nom_Matiere']." </td>
       <td>".$ligne['Date']." </td>
        <td>".$ligne['Heure']." </td>
   
         </tr>";


     }
  ?>
</table>
</div>

</div>
</body>
</html>