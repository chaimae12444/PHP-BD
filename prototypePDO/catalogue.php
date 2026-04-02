<?php


require 'config.php';

$sql="SELECT * FROM produits";
$stmt=$pdo->query ($sql);
$produitss=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($produitss as $pp):?>
       <P>id: <?= htmlspecialchars($pp['id']) ?> </P>
        <P>nom: <?= htmlspecialchars($pp['nom']) ?> </P>
        <P>prix: <?= htmlspecialchars($pp['prix']) ?> </P>
        <P>description: <?= htmlspecialchars($pp['description']) ?> </P>
        <P>categorie: <?= htmlspecialchars($pp['categorie']) ?> </P>

<a href="Détails.php?id=<?= $pp['id'] ?>">Détails</a>
    <?php endforeach;?>

  
</body>
</html>
