<?php
// Verifica se o formulário foi enviado
if($_POST){
    // Verifica se os campos estão definidos e não estão vazios
    if(isset($_POST["first_name"]) && !empty($_POST["first_name"]) &&
       isset($_POST["last_name"]) && !empty($_POST["last_name"])){
        // Inclui o arquivo de conexão
        require_once('connect.php');

        // Limpa os dados para evitar SQL injection
        $id = strip_tags($_POST['id']);
        $first_name = strip_tags($_POST['first_name']);
        $last_name = strip_tags($_POST['last_name']);

        // Prepara a consulta SQL
        $sql = "UPDATE users SET first_name = :first_name, last_name = :last_name WHERE id = :id";

        // Prepara a declaração
        $stmt = $pdo->prepare($sql);

        // Vincula os parâmetros
        $stmt->bindValue(':first_name', $first_name);
        $stmt->bindValue(':last_name', $last_name);
        $stmt->bindValue(':id', $id);

        // Executa a declaração
        $stmt->execute();

        // Redireciona para a página de sucesso
        header('Location: success.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Dados do Usuário</title>
</head>
<body>
    <h1>Modificar Dados do Usuário</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="first_name">Prénom:</label>
        <input type="text" name="first_name" value="<?= $user['first_name'] ?>" required>
        <label for="last_name">Nom:</label>
        <input type="text" name="last_name" value="<?= $user['last_name'] ?>" required>
        <button type="submit">Modificar</button>
    </form>
    <a href="atelier.php">Retour</a>
</body>
</html>
