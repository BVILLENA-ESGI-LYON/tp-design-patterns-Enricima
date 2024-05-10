<?php

namespace EsgiIw\TpDesignPattern\Product;

class SmsAlertContent implements AlertContentInterface
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function createContent(): void
    {
        echo "SMS content: " . $this->content . "\n";
    }
}
