<?php

// on verifis qu' il ya  bien une id l' url et que ultilizetour correspondent existe
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
        //on gére la supression de l'utilisetour
        $sql = "DELETE FROM users WHERE id = :id";

        $query = $bd->prepare($sql);

        $query->blindValue(":id" , $id )

    }

} else {
    header("Location: index.php");
    exit;
}
?>

