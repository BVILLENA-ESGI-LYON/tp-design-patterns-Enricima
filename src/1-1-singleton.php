<?php

require_once 'src/Model/Database/DbConnection.php';

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

// Test du Singleton
$dbConnection1 = DbConnection::getInstance();
$dbConnection2 = DbConnection::getInstance();

if ($dbConnection1 === $dbConnection2) {
    echo "Les deux instances de DbConnection sont identiques, le Singleton fonctionne correctement.";
} else {
    echo "Les deux instances de DbConnection sont différentes, le Singleton ne fonctionne pas correctement.";
}
