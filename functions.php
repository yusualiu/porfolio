<?php
function connectToDb(){
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
  
  } catch (PDOException $ex) {
    die('Could not connect '.$ex->getMessage());
  }
}

function fetchAllTasks($pdo){
 
  $statement = $pdo->prepare("SELECT * FROM todos");

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS,'Task');// fetchAll is not Ideal for Large Records
}

function dd($val){
  echo "<pre>";
  die(var_dump($val));
  echo "</pre>";
}

function isAdult($age){
  return $age >= 21 ? true : false;
}