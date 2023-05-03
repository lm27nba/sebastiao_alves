<?php

$pdo = new PDO('mysql:dbname=' . $base_dados["dbname"] . ';host=' . $base_dados["host"] . '','' . $base_dados["user"] . '','' . $base_dados["pass"] . '');

// procurar tudo.
function selectSQL($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC); // apanha todos os produtos
}

// procurar apenas um dado, retorna o primeiro que encontrar no caso de haver vários.
function selectSQLUnico($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
    return $query->fetch(PDO::FETCH_ASSOC); // apanha "O" resultado
}

// Insert - Delete - Update.
function iduSQL($sql){
    global $pdo;
    
    $query = $pdo->query($sql);
}

?>