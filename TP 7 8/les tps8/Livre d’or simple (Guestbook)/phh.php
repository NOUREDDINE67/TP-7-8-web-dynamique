<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d’or</title>
   
      
</head>
<body>

<?php
$fichier = "messages.txt";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $date = date("d/m/Y H:i:s");

    if ($nom && $message) {
        $ligne = "$date | $nom : $message\n";
        file_put_contents($fichier, $ligne, FILE_APPEND);
        echo "<p style='color: green;'>Merci pour votre message !</p>";
    }
}


if (file_exists($fichier)) {
    $lignes = file($fichier, FILE_IGNORE_NEW_LINES);

    echo "<h2>📬 Messages :</h2>";
    foreach ($lignes as $ligne) {
       
        $parties = explode(" | ", $ligne, 2);
        if (count($parties) == 2) {
            echo "<div class='message'>";
            echo "<div class='date'>" . htmlspecialchars($parties[0]) . "</div>";
            echo "<div>" . nl2br(htmlspecialchars($parties[1])) . "</div>";
            echo "</div>";
        }
    }
}
?>

</body>
</html>