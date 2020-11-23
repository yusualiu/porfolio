<?php

require 'functions.php';
class Task{

  public $description;
  public $completed = false;
  public function __construct($description){
    $this->description = $description;
   
  }

  public function complete(){
    $this->completed  = true;
  }

  public function isComplete(){
    return $this->completed;
  }
  public function description(){
    return $this->description;
  }
}


// $task = new Task('Go to the party');

// $task->complete();

$tasks = [
  new Task('Go to the Mosque'),
  new Task('Go to the Gym'),
  new Task('Go to the Market'),
  new Task('Read your books')
  
];

$tasks[0]->complete();



require 'index.view.php';