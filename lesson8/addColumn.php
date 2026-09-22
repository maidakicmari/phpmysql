<?php
try{
    $pdo=new PDO ("mysql:host=localhost;dbname=db3","root","");
    $sql="ALTER TABLE users ADD email VARCHAR(255)";
    $pdo->exec($sql);
    echo "Column created successfully!";
}catch(PDOExpection $e){
    echo "Error creating column: ". $e.getMessage();
}
?>