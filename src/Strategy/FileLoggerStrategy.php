<?php

namespace EsgiIw\TpDesignPattern\Strategy;

use EsgiIw\TpDesignPattern\Strategy\LoggerStrategy;

class FileLoggerStrategy implements LoggerStrategy
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function log(string $message): string
    {
        // Logique pour enregistrer le message dans un fichier
        $logMessage = "FileLogStrategy: $message\n";
        file_put_contents($this->fileName . '.log', $logMessage, FILE_APPEND);
        return $logMessage;
    }
}
