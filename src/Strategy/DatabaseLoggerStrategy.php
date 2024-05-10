<?php

namespace EsgiIw\TpDesignPattern\Strategy;

use EsgiIw\TpDesignPattern\Strategy\LoggerStrategy;

class DatabaseLoggerStrategy implements LoggerStrategy
{
    public function log(string $message): string
    {
        // Logique pour enregistrer le message dans la base de données
        $logMessage = "DatabaseLogStrategy: $message\n";
        // Enregistrement dans la base de données
        return $logMessage;
    }
}
