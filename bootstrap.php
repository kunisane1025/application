<?php
require 'core_ClassLoader.php';

$loader = new ClassLoader();
$loader -> registerDir(dirname(__FILE__).'/core');
$loader -> registerDir(dirname(__FILE__).'/models');
$loader -> register(); 
