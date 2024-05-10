<?php

require_once 'src/Entity/Event.php';
require_once 'src/Adapter/EventCsvExportAdapter.php';
require_once 'src/Adapter/EventJsonExportAdapter.php';

use EsgiIw\TpDesignPattern\Entity\Event;
use EsgiIw\TpDesignPattern\Adapter\EventCsvExportAdapter;
use EsgiIw\TpDesignPattern\Adapter\EventJsonExportAdapter;

// Création d'objets Event à partir des données $eventData
$eventData = [
    ['id' => 1, 'name' => 'Event 1', 'description' => 'Description 1', 'location' => 'Location 1', 'time' => '2024-05-10'],
    ['id' => 2, 'name' => 'Event 2', 'description' => 'Description 2', 'location' => 'Location 2', 'time' => '2024-05-11'],
];

$events = [];
foreach ($eventData as $data) {
    $event = new Event($data['id'], $data['name'], $data['description'], $data['location'], $data['time']);
    $events[] = $event;
}

// Test de l'Adapter
$csvExportAdapter = new EventCsvExportAdapter();
$jsonExportAdapter = new EventJsonExportAdapter();

echo "Exporting events to CSV:\n";
foreach ($events as $event) {
    echo $csvExportAdapter->exportToCsv($event) . "\n";
}

echo "\nExporting events to JSON:\n";
foreach ($events as $event) {
    echo $jsonExportAdapter->exportToJson($event) . "\n";
}
