<?php

$host="localhost";
$db="cosmetics";
$user="root";
$pass="";

try{
    $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);

    $sql="CREATE TABLE makeup (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    concelear VARCHAR (30) NOT NULL ,
    bronzer VARCHAR (50) NOT NULL,
    blush VARCHAR (30) NOT NULL,
    lipliner VARCHAR (30) NOT NULL,
    powder VARCHAR (30) NOT NULL
    )";

    $pdo -> exec($sql);

    echo "Table created successfully";
}catch(Exepction $e){
    echo "Error creating table" . $e->getMessage();
}
?>