<?php

namespace EsgiIw\TpDesignPattern\Product;

class EmailAlertContent implements AlertContentInterface
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function createContent(): void
    {
        echo "Email content: " . $this->content . "\n";
    }
}
