<?php

//设置默认时区
date_default_timezone_set("Asia/Shanghai");
error_reporting(E_ALL ^E_NOTICE ^E_WARNING);
// defined('B5M_DEBUG') or define('B5M_DEBUG', true);
// defined('B5M_TRACE_LEVEL') or define('B5M_TRACE_LEVEL', 3);
// $b5m = dirname(__FILE__) . '/b5m/B5m.php';
$b5m = dirname(__FILE__) . '/b5m/db/BDbConnection.php';
require_once($b5m);
$config = dirname(__FILE__) . DIRECTORY_SEPARATOR .'protected/config/config.php';
$config = require($config);
// $pdo_con = new BDbConnection($config);
$pdo_con = new BDbConnection();
// B5m::app($config)->run();
// var_dump($pdo_con->_getPdo($config));
$fpdo = $pdo_con->_getPdo($config);
// $query = $fpdo->from('scd')->execute()->fetch(PDO::FETCH_NUM);
$result = $fpdo->from('scd')
        ->execute()
        ->fetch();
echo '<pre>';
print_r($result);