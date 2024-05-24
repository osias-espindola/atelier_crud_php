<?php // Não é necessário fechar a tag PHP se o arquivo contém apenas código PHP.

if(
    isset($_POST["first_name"]) && !empty($_POST["first_name"]);
    && isset($_POST["last_name"]) && !empty($_POST["last_name"]);
    ){
require_once("connect.php");

$first_name = strip_tags($_POST["first_name"]); // Corrigido para $_POST
$last_name = strip_tags($_POST["last_name"]); // Corrigido para a variável correta e $_POST

$sql = "INSERT INTO users (first_name, last_name)
        VALUES (:first_name, :last_name)"; // Adicionado os dois pontos para o placeholder :last_name
        
$query = $db->prepare($sql); // Corrigido para usar $db que é o objeto PDO
$query->bindValue(":first_name", $first_name); // Corrigido para bindValue
$query->bindValue(":last_name", $last_name); // Corrigido para bindValue

$query->execute();

header("Location: index.php")
} else {
    echo "Ramplir le formulaire!"
}