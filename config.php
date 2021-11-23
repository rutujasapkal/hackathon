<?php

define('DB_NAME', 'sampledb');
define('DB_USER', 'techpandavas');
define('DB_PASSWORD', 'techpandavas');
define('DB_HOST', 172.30.46.255);

$pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);