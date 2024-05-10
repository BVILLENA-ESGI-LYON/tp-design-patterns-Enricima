<?php

require_once 'src/Logger/LoggerWithStrategies.php';
require_once 'src/Logger/Strategy/FileLogStrategy.php';
require_once 'src/Logger/Strategy/DatabaseLogStrategy.php';
require_once 'src/Logger/Strategy/SendAdminEmailLogStrategy.php';
require_once 'src/Logger/Strategy/FileDebugLogStrategy.php';

use EsgiIw\TpDesignPattern\Strategy\LoggerStrategy;
use EsgiIw\TpDesignPattern\Strategy\FileLoggerStrategy;
use EsgiIw\TpDesignPattern\Strategy\DatabaseLoggerStrategy;
use EsgiIw\TpDesignPattern\Strategy\EmailLoggerStrategy;

// Test du Strategy
$logger = new LoggerStrategy();

// Utilisation de différentes stratégies
$fileLogger = new FileLoggerStrategy("test"); // Utilisation de la stratégie de fichier avec le nom "test"
$databaseLogger = new DatabaseLoggerStrategy(); // Utilisation de la stratégie de base de données
$emailLogger = new EmailLoggerStrategy("admin@admin"); // Utilisation de la stratégie d'envoi d'email à l'administrateur

// Log message with FileLogStrategy
$logger->log($fileLogger->log("Log message with FileLogStrategy"));

// Log message with DatabaseLogStrategy
$logger->log($databaseLogger->log("Log message with DatabaseLogStrategy"));

// Log message with SendAdminEmailLogStrategy
$logger->log($emailLogger->log("Log message with SendAdminEmailLogStrategy"));
