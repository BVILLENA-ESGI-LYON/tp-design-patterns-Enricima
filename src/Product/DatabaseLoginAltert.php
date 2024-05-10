<?php

namespace EsgiIw\TpDesignPattern\Product;

class DatabaseLoginAlert
{
    public function send(): void
    {
        echo "Alerte de connexion enregistrée dans la base de données.\n";
    }
}
