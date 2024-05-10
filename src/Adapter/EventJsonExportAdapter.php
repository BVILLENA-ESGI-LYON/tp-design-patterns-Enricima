<?php

namespace EsgiIw\TpDesignPattern\Adapter;

use EsgiIw\TpDesignPattern\Entity\Event;

class EventJsonExportAdapter
{
    public function exportToJson(Event $event): string
    {
        // Logique pour exporter l'événement au format JSON
        $data = [
            'id' => $event->getId(),
            'name' => $event->getName(),
            'description' => $event->getDescription(),
            'location' => $event->getLocation(),
            'time' => $event->getTime(),
            // Autres propriétés de l'événement
        ];

        return json_encode($data);
    }
}
