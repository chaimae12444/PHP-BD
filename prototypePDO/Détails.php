<?php
require 'config.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM produits WHERE id=?");
$stmt->execute([$id]);
$produit = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails</title>
</head>

<body>

<h1>Détails</h1>



    <p>nom: <?= htmlspecialchars($produit['nom']) ?></p>
    <p>prix: <?= htmlspecialchars($produit['prix']) ?> DH</p>
    <p>description: <?= htmlspecialchars($produit['description']) ?></p>
    <p>categorie: <?= htmlspecialchars($produit['categorie']) ?></p>





<br>
<a href="catalogue.php">Retour</a>

</body>
</html>