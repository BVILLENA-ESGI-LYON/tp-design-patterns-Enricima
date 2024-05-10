<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class LocationDecorator extends EventDecorator
{
    public function getDescription(): string
    {
        return $this->event->getDescription() . ", located at {$this->event->getLocation()}";
    }
}
