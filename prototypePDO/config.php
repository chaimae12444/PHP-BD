<?php
$host= "localhost";
$dbname= "gestion_produits";
$users="root";
$password="";
try{
    $pdo=new PDO("mysql:host=$host;dbname=$dbname",$users,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connexion";
}catch(PDOException $e){
    echo $e->getMessage();
}











