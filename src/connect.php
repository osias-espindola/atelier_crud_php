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
?>