<?php //porqua on ne ferme pas le php ?
$first_name = $_POSTE["first_name"];
$first_name = $_POSTE["last_name"];

$sql = "INSERT INTO users (first_name, last_name)
        VALUES (:first_name, last_name)";
        
$query->prepare($sql);
$query->bindevalue(":first_name , $first_name);
$query->bindevalue(":last_name , $last_name);

$query->execute();