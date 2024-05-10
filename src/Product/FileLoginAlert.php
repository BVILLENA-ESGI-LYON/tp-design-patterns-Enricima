<?php

namespace EsgiIw\TpDesignPattern\Product;

class FileLoginAlert
{
    public function send(): void
    {
        echo "Alerte de connexion écrite dans un fichier de log.\n";
    }
}
