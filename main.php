<?php

require_once 'install.php';
$arr = require_once('Settings/garden.php');


$apple = new \Classes\Apple($arr['apple']);
$pear = new \Classes\Pear($arr['pear']);

$apple->getInfo();
$pear->getInfo();