<?php
require 'connexion.php';

if(isset($_POST['ok'])){

    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        die("Email invalide !");
    }

    try {

        $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
        $stmt->execute([
            'nom' => $nom,
            'email' => $email
        ]);

        echo "Utilisateur ajouté avec succès.";

    } catch (PDOException $e) {
        file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND);
        echo "Une erreur est survenue. Contactez l’administrateur.";
    }
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" name="ok">Ajouter</button>
</form>
</body>
</html>