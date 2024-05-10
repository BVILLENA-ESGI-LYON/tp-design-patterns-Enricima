<?php

namespace EsgiIw\TpDesignPattern\Strategy;

use EsgiIw\TpDesignPattern\Strategy\LoggerStrategy;

class EmailLoggerStrategy implements LoggerStrategy
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function log(string $message): string
    {
        // Logique pour envoyer le message par e-mail à l'administrateur
        $logMessage = "SendAdminEmailLogStrategy: $message\n";
        // Envoi de l'e-mail
        return $logMessage;
    }
}
