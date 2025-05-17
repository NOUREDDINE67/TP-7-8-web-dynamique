<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculatrice</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $y = isset($_POST['y']) ? (float)$_POST['y'] :'';
    $x = isset($_POST['x']) ? (float)$_POST['x'] : '';
    $op = isset($_POST['op']) ? $_POST['op'] : '';
    $k = '';

  
    switch ($op) {
        case 'add':
            $k = $y + $x;
            break;
        case 'soustraction':
            $k = $y - $x;
            break;
        case 'multiplication':
            $k = $y * $x;
            break;
        case 'division':
            if ($num2 != 0) {
                $k = $y / $x;
            } else {
                $k = "Erreur : Division par zéro";
            }
            break;
        default:
            $k = "Opération invalide";
    }

    echo "Résultat : $k";
} else {
    echo "Méthode non autorisée.";

}
echo "<br><a href='indexA.html'>Revenir à la calculatrice</a>";

?>
</body>
</html>