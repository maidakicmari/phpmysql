<?php
try{
    $pdo=new PDO ("mysql:host=localhost;dbname=cosmetics","root","");
    $sql="ALTER TABLE makeup DROP column lipliner";
    $pdo->exec($sql);
    echo "Column dropped successfully!";
}catch(PDOExpection $e){
    echo "Error deleting column: ". $e.getMessage();
}
?>