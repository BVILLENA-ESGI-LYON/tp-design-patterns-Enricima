<?php

namespace EsgiIw\TpDesignPattern\Decorator;
use EsgiIw\TpDesignPattern\Entity\Event;

abstract class EventDecorator
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    abstract public function getDescription(): string;
}
