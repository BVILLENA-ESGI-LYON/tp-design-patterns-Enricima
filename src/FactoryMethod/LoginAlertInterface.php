<?php

namespace EsgiIw\TpDesignPattern\FactoryMethod;

interface LoginAlertInterface
{
    public function sendAlert(string $message): void;
}
