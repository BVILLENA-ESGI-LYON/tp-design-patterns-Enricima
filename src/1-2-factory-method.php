<?php

require_once 'src/Factory/LoginAlertFactory.php';

use EsgiIw\TpDesignPattern\Factory\LoginAlertFactory;

// Test du Factory Method
$loginAlertFactory = new LoginAlertFactory();

$fileLoginAlert = $loginAlertFactory->createFileLoginAlert();
$fileLoginAlert->send();

$databaseLoginAlert = $loginAlertFactory->createDatabaseLoginAlert();
$databaseLoginAlert->send();

$mailLoginAlert = $loginAlertFactory->createMailLoginAlert();
$mailLoginAlert->send();
