<?php



// var_dump($app['database']->selectAll('todos'));


$app['database']->insert('users',[
  'name'=> $_POST['name'],
  
]);



header('Location: /');
