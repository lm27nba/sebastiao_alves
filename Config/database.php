<?php

$pdo = new PDO('mysql:dbname=' . $base_dados["dbname"] . ';host=' . $base_dados["host"] . '','' . $base_dados["user"] . '','' . $base_dados["pass"] . '');

// Procurar todos os elementos na base de dados.
function selectSQL($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// Procurar apenas um elemento na base de dados.
function selectSQLUnico($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
    return $query->fetch(PDO::FETCH_ASSOC); 
}

// Insert - Delete - Update.
function iduSQL($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
}

?>