<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class TimeDecorator extends EventDecorator
{
    public function getDescription(): string
    {
        return $this->event->getDescription() . ", starting at {$this->event->getTime()}";
    }
}
