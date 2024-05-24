<?php
    const DBHOST = "db";
    const DBNAME = "atelier_crud";
    const DBUSER = "test";
    const DBPASSWORD = "test";
    
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    // Teste para a conexão
    try {
        $db = new PDO($dsn, DBUSER, DBPASSWORD);
        echo "Conexão reussi" . "<br>";
    } catch(PDOException $error){
        echo "Échec la connexion: " . $error->getMessage() . "<br>"; 
    }

    $sql = "SELECT * FROM atelier_table";
    $query = $db->prepare($sql);
    $query->execute();
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
    <h1>Liste des Utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td>
                        <a href="user.php?id="></a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>