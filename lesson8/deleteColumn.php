<?php
try{
    $pdo=new PDO ("mysql:host=localhost;dbname=db3","root","");
    $sql="ALTER TABLE users DROP column username";
    $pdo->exec($sql);
    echo "Column dropped successfully!";
}catch(PDOExpection $e){
    echo "Error deleting column: ". $e.getMessage();
}
?>