<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

use EsgiIw\TpDesignPattern\Entity\Event;

abstract class EventRegistrationTemplate
{
    public function register(Event $event): void
    {
        if ($this->validate($event)) {
            $this->onSuccess($event);
        } else {
            $this->onFailure($event);
        }
    }

    abstract protected function validate(Event $event): bool;

    abstract protected function onSuccess(Event $event): void;

    abstract protected function onFailure(Event $event): void;
}
