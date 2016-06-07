<?php
include('_start.php');

$databasemanagar->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'fos',
    'username'  => 'user',
    'password'  => 'pass mysql',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$debug = false;

include('_load.php');
