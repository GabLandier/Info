<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'âge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateSaisie = $_POST["date"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];

    if (!empty($dateSaisie)) {
        $dateActuelle = new DateTime();
        $dateUtilisateur = new DateTime($dateSaisie);
        $difference = $dateActuelle->diff($dateUtilisateur);
        
        echo "<p class='message1'>Bonjour " . $prenom . " " . $nom . ".</p>";
        echo "<p class='message2'>Vous avez " . $difference->y . " ans.</p>";
    } else {
        echo "<p>Veuillez entrer une date valide.</p>";
    }
  }
  ?>
</body>
</html>
