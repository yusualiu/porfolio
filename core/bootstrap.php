<?php

$config = require 'config.php';
require 'core/Router.php';
require 'core/Database/Connection.php';
require 'core/Database/QueryBuilder.php';





return new QueryBuilder(Connection::make($config['database']));