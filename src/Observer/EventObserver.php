<?php

namespace EsgiIw\TpDesignPattern\Observer;

use EsgiIw\TpDesignPattern\Entity\Event;

interface EventObserver
{
    public function handleEventUpdate(Event $event): void;
}