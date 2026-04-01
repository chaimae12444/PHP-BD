<?php

    require "connexion.php";
$id = $_GET['id'];




    $sql = "DELETE FROM utilisateur WHERE  id=?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$id]);

    header('location:select.php');

?>








