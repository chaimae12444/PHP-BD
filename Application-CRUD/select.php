<?php
require 'connexion.php';

$sql="SELECT * FROM utilisateur";
$stmt=$pdo->query($sql);

$utilisateurs=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
    <th> ID</th>
    <th>NOM </th>
    <th>EMAIL </th>
     <th>AGE </th>
     <th>TD </th>
     <th>ACTION </th>
    </tr>
<?php
    foreach($utilisateurs as $utilis){
        echo"<tr>";


           echo'<td>'.$utilis['id'].'</td>';
           echo'<td>'.$utilis['nom'].'</td>';
           echo'<td>'.$utilis['email'].'</td>';
           echo'<td>'.$utilis['age'].'</td>';
           echo'<td>'.$utilis['tele'].'</td>';

            echo"<td>
            
            <a href='modifier.php?id=".$utilis['id']."'>modifier</a>
            <a href='supremer.php?id=".$utilis['id']."'>delete</a>
            
            </td>";

        echo"</tr>";


    }

?>
<a href="ajouter.php">ajouter</a><br><br>
    </table>
</body>
</html>

