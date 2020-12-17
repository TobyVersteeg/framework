<?php

require 'vendor/autoload.php';
require 'core.php';

$dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();