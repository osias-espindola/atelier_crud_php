<!-- code pour la connection -->
<?php 
    const DBHOST = "db";
    const DBNAME = "atelier_crud";
    const DBUSER = "test";
    const DBPASSWORD = "test";
    
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    //test pour la conection
    try {
        $db = new PDO($dsn , DBUSER , DBPASSWORD );
        echo "Conection reussi" . "<br>";
    } catch(PDOException $error){
        echo " échec la conexion: " . $error->getMessege() . "<br>"; 
    }
