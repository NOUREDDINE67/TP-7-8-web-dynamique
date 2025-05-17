<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire TP PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ico.png">
</head>
<body>
    <h1> Formulaire TP php</h1>

    <form action="reponse.php" method="POST"> 
        <label>Nom :</label> 
        <input type="text" name="nom" required> 

        <label>Prénom :</label> 
        <input type="text" name="prenom" required> 

        <label>Groupe :</label> 
        <input type="number" name="group" required> 

        <label>Sujet :</label> 
        <input type="text" name="sujet" required> 

        <label>Date début :</label> 
        <input type="date" name="date_debut" required> 

        <label>Date fin :</label> 
        <input type="date" name="date_fin" required> 

        <label>Encadrement :</label> 
        <input type="text" name="encadrement" required> 

        <input type="submit" value="Envoyer"> 
        <input type="reset" value="Annuler"> 
    </form> 

</body> 
</html>