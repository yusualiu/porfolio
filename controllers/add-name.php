<?php



// var_dump($app['database']->selectAll('todos'));


App::get('database')->insert('users',[
  'name'=> $_POST['name'],
  
]);



header('Location: /');
