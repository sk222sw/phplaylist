<?php

require_once("project/controller/MasterController.php");

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$m = new controller\MasterController();
$m->run();