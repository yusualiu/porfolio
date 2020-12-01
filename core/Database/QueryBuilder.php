<?php

class QueryBuilder{

  protected $pdo;

  public function __construct($pdo){

    $this->pdo = $pdo;

  }

  public function selectAll($table){
    $statement = $this->pdo->prepare("SELECT * FROM {$table}");

    $statement->execute();
  
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table,$parameters){
    
    $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)'
    , $table,
    implode(', ',array_keys($parameters)),
    ':'.implode(', :',array_keys($parameters))    //setting place holders
    );
   try {
    $statement = $this->pdo->prepare($sql);
    $statement->execute($parameters);
   
   } catch (Exception $th) {
     die("Something went wrong we could not proceed with transaction");
   }
  }

  public function delete($table,$id){
   
  $sql = "DELETE FROM ${table} WHERE id=:id ";
  try {
    $statement = $this->pdo->prepare($sql);
    
    $statement->execute($id);
   
   } catch (Exception $th) {
     die("Whoops Something went wrong we could not proceed with transaction");
   }
   
  }
}