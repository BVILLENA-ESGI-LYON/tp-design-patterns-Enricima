<?php

namespace EsgiIw\TpDesignPattern\Product;

class MailLoginAlert
{
    public function send(): void
    {
        echo "Alerte de connexion envoyée par e-mail.\n";
    }
}
