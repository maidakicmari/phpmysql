<?php
try{
    $pdo=new PDO ("mysql:host=localhost;dbname=db3","root","");
    $sql="DROP TABLE users";
    $pdo->exec($sql);
    echo "Table dropped successfully!";
}catch(PDOExpection $e){
    echo "Error dropping table: ". $e.getMessage();
}
?>