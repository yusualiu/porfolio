<?php


class Router{

  protected $routes = [];

  public function define($routes){
    $this->routes = $routes;
  }
  public static function load($file){
    $router = new self; // or new Self
    require $file;

    return $router; // returning and object in a method.

  }

  
  public function direct($uri){
    if(array_key_exists($uri,$this->routes)){
      return $this->routes[$uri];
    }

    throw new Exception('No routes defined for this uri');
  }

}