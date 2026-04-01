<?php

if (isset($_POST['ok'])) {
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $tele=$_POST['tele'];




require"connexion.php";
$sql="INSERT INTO utilisateur(nom,email,age,tele) VALUES(?,?,?,?)";
$stmt=$pdo->prepare($sql);

$stmt->execute([$nom,$email,$age,$tele]);

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
    <input type="text" name="nom"><br>
     <input type="text" name="email"><br>
    
     <input type="number" name="age"><br>
     <input type="number" name="tele"><br>
      <button type="submit" name="ok">ok</button>
      

</form>



</body>
</html>