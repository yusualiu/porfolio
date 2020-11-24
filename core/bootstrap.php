<?php

$app =[];

$app['config']= require 'config.php';
require 'core/Router.php';
require 'core/Database/Connection.php';
require 'core/Request.php';
require 'core/Database/QueryBuilder.php';





$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));