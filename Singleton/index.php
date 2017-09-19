<?php

require "Database.php";

use Singleton\Database;

$obj1 = Database::getInstance();
$obj2 = Database::getInstance();
/** @var Database $obj1 */
var_dump($obj1->query());
die();