<?php
try{
    $pdo=new PDO ("mysql:host=localhost;dbname=cosmetics","root","");
    $sql="DROP TABLE makeup";
    $pdo->exec($sql);
    echo "Table dropped successfully!";
}catch(PDOExpection $e){
    echo "Error dropping table: ". $e.getMessage();
}
?>