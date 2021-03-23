<?php

$app = [];

require "core/router.php";

require "core/database/connection.php";

require "core/database/querybuilder.php";

require "core/request.php";

$app['config'] = require 'config.php'; 

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));