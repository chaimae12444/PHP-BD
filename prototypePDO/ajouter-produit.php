<?php
   require'config.php';
   $error=[];
   $nom=$prix=$description=$categorie="";
   if(isset($_POST['ok'])){
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $description=$_POST['description'];
    $categorie=$_POST['categorie'];


    if(!$nom) $error[]="nom false";
     if(!$prix) $error[]="prix false";
     if(!$description) $error[]="description false";
     if(!$categorie) $error[]="categorie false";

if(empty($error)){
    $sql="INSERT INTO produits(nom,prix,description,categorie)VALUES(?,?,?,?)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
        $nom,
        $prix,
        $description,
        $categorie
    ]);
    header("location:catalogue.php");
    exit;
   


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
            <input type="text" name="nom" placeholder="nom">
             <input type="number" name="prix" placeholder="prix">
              <input type="text" name="description" placeholder="descriptio">
               <input type="text" name="categorie" placeholder="categorie">
               <button type="submit" name="ok">ok</button>
</form>


    </body>
    </html>