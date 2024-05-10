<?php

namespace EsgiIw\TpDesignPattern\Observer;

use EsgiIw\TpDesignPattern\Entity\Event;

class EventSubject
{
    private $observers = [];

    public function attach(EventObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(EventObserver $observer): void
    {
        $index = array_search($observer, $this->observers, true);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function modifyEvent(Event $event): void
    {
        // Logique pour modifier un événement
        // ...
        
        // Une fois que l'événement est modifié, notifier tous les observateurs
        $this->notify($event);
    }

    private function notify(Event $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->handleEventUpdate($event);
        }
    }
}
