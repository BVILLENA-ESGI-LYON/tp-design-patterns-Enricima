<?php

namespace EsgiIw\TpDesignPattern\Adapter;

use EsgiIw\TpDesignPattern\Entity\Event;

class EventCsvExportAdapter
{
    public function exportToCsv(Event $event): string
    {
        // Logique pour exporter l'événement au format CSV
        $data = [
            $event->getId(),
            $event->getName(),
            $event->getDescription(),
            $event->getLocation(),
            $event->getTime(),
            // Autres propriétés de l'événement
        ];

        return implode(',', $data);
    }
}
