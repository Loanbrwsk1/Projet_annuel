<?php
$DB_NAME = 'mysql:host=localhost;dbname=NeonQuests';
$DB_USER = 'admin';
$DB_PWD = 'admin';
$OPTIONS =
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];