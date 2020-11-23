<?php

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';




return new QueryBuilder(Connection::make());