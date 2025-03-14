<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'âge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form method="post" action="ex3resultat.php">
    <table>
		<tr>		
			<td class="texte"><label for="nom">Quel est votre nom ?</label></td>
			<td><input type="text" id="nom" name="nom" required></td><br>
		</tr>
		<tr>
			<td class="texte"><label for="prenom">Quel est votre prénom ?</label></td>
			<td><input type="text" id="prenom" name="prenom" required></td><br>
		</tr>
		<tr>
			<td class="texte"><label for="date" >Quel est votre date de naissance ?</label></td>
			<td><input type="date" id="date" name="date" required></td><br>
		</tr>
		<tr>
			<td></td><td> <div class="bouton"><input type="submit" value="Envoyer"></div></td>
		</tr>
    </table>
  </form>
</body>
</html>









/*wampserveur.com*/
