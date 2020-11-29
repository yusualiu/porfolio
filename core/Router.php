<?php

namespace App\Core;

class Router{

  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  
  public static function load($file){
    $router = new self; // or new Self
    require $file;

    return $router; // returning and object in a method.

  }
  public function get($uri,$controller){
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri,$controller){
    $this->routes['POST'][$uri] = $controller;
  }

  
  public function direct($uri,$requestType){

    
    if(array_key_exists($uri,$this->routes[$requestType])){
    
      return $this->callAction(
        ...explode('@',$this->routes[$requestType][$uri])
      );
    }

    throw new Exception('No routes defined for this uri');
  }

  protected function callAction($controller,$action){
    $controller ="App\\Controllers\\{$controller}";
    $controller = new $controller;
    
    if(!method_exists($controller,$action)){
      throw new Exception( "{$controller} does not respond to the {$action} method");
    }

    return $controller->$action();

  }

}