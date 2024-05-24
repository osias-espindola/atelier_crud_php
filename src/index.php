<?php
    const DBHOST = "db";
    const DBBASE = "atelier_crud";
    const DBUSER = "test";
    const DBPASSWORD = "test";
    
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    //test pour la conection
    try {
        $bd = new BDO($dsn , DBUSER , DBPASS );
        echo "Conection reussi" . "<br>";
    } catch(PDOException $error)
        echo " échec la conexion: " . $error->getMessege() . "<br>"; 



    $sql = "SELECT* FROM atelier_table";
   

    //on prepar la roquête
    $query = $db->prepare($sql);
    //on execute la roquête
    $query->execute();
    //on recupere le donnes sous forme de tableu associative
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);
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