<?php

namespace EsgiIw\TpDesignPattern\Strategy;

interface LoggerStrategy
{
    public function log(string $message): string;
}
