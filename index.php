<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';
use App\Core\{Request,Router};

$router = new Router;




Router::load('app/routes.php')->direct(Request::uri(),Request::method());