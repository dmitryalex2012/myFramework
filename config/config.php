<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'myframework');
define('DB_USER', 'sitemanufactura');
define('DB_PASS', '200384');

$DB = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASS);
