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
 $requete = "SELECT * FROM matiere " ;
   $resultat = $mysqli->query($requete);

  echo "<table border=\"1\"class=\"table\"style=\"border-collapse:collapse;text-align:center;\">

       <tr>

      <th>ID</th>
       <th> Nom Mathiere</th>
        <th> Nom enseignant</td>
        <th> Coefficient</th>
       
    </tr>";
  while ($ligne = $resultat->fetch_assoc()) {




echo "
 <tr>

      <td>".$ligne['id']." </td>
      <td>".$ligne['Nom_Matiere']." </td>
      <td>".$ligne['Nom_enseignant']." </td>
      <td>".$ligne['Coeficient']." </td>
         </tr>";


     }
  ?>
</table>
</div>

</body>
</html>

