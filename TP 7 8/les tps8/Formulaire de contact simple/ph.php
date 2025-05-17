<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = trim($_POST["nom"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        if (!empty($nom) && !empty($email) && !empty($message)) {
            echo "<h2>Données reçues :</h2>";
            echo "<p><strong>Nom :</strong> $nom</p>";
            echo "<p><strong>Email :</strong> $email</p>";
            echo "<p><strong>Message :</strong><br>$message</p>";
        } else {
            echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>
</body>
</html>