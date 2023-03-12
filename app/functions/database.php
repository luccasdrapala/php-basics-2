<?php 

function connection(){

    $pdo = new \PDO("mysql:host=localhost;dbname=phpbasics", 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;

}

function create($table, $fields){
    
    $pdo = connection();

    if(!is_array($fields)){
        $fields = (array) $fields;
    }

    $sql = "INSERT INTO {$table} (";
    $sql .= implode(',', array_keys($fields)) . ") VALUES (:";
    $sql .= implode(',:', array_keys($fields)) . ")";

    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);
}

function update() {

}

function find(){

}

function delete(){

}