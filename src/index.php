<?php
    const DBHOST = "db";
    const DBBASE = "atelier_crud";
    const DBUSER = "test";
    const DBPASSWORD = "test";
    
    //test pour la conection
    try {
        $bd = new BDO()
        echo "test" . "<br>";
    } catch (PDOException $error) 
        echo " echec la conection: " . $error -> getMessege() . "<br>"; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier CRUD</title>
</head>
<body>
    <h1>Liste des Ultilisatuer</h1>
    <table>
        <thead>
            <td>id</td>
            <td>prenome</td>
            <td>nom</td>
        </thead>
    </table>
    <tbody>
        <tr>
            <td>0</td>
            <td>Luiza</td>
            <td>Maria</td>
        </tr>
    </tbody>
    
</body>
</html>