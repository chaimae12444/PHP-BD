<?php

    require "connexion.php";
$id = $_GET['id'];


$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE id=?");
$stmt->execute([$id]);
$user = $stmt->fetch();


if (isset($_POST['ok'])) {


   
    $nom   = $_POST['nom'];
    $email = $_POST['email'];
    $age   = $_POST['age'];
    $tele  = $_POST['tele'];

    $sql = "UPDATE utilisateur SET nom=?, email=?, age=?, tele=? WHERE id=?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$nom, $email, $age, $tele, $id]);

    header('location:select.php');
}
?>











<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method=POST>
    <input type="text" name="nom"   value="<?= $user['nom'] ?>"><br>
     <input type="text" name="email"   value="<?= $user['email'] ?>"><br>
    
     <input type="number" name="age"   value="<?= $user['age'] ?>"><br>
     <input type="number" name="tele"  value="<?= $user['tele'] ?>""><br>
      <button type="submit" name="ok">ok</button>
      

</form>
</body>
</html>