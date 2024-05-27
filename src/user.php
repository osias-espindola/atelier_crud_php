<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    require('connect.php');
    
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM users WHERE id = :id";
    $query = $db->prepare($sql);
   
    // Bind the value of the id from the request to the $id variable
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $user = $query->fetch();
    
    // Verify if the user exists
    if ($user) {
        header("Location: index.php");
        exit;
    } else {
        require('disconnect.php');
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de <?= $user["first_name"] . " " . $user["last_name"];?></title>
</head>
<body>
    <h1><?= $user["first_name"] . " " . $user["last_name"];?></h1>

</body>
</html>