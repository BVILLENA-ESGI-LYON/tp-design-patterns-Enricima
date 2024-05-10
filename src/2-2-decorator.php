<?php

require_once 'src/Decorator/EventDecorator.php';

use EsgiIw\TpDesignPattern\Decorator\EventDecorator;
use EsgiIw\TpDesignPattern\Decorator\LocationDecorator;
use EsgiIw\TpDesignPattern\Decorator\TimeDecorator;
use EsgiIw\TpDesignPattern\Entity\Event;

// Test du Decorator
$eventData = [
    ['id' => 1, 'name' => 'Event 1', 'date' => '2024-05-10', 'location' => 'Location 1'],
    ['id' => 2, 'name' => 'Event 2', 'date' => '2024-05-11', 'location' => 'Location 2'],
];

$events = [];
foreach ($eventData as $data) {
    $event = new EventDecorator(new Event($data['id'], $data['name'], $data['description'], $data['location'], $data['time']));
    $event = new TimeDecorator(new Event($data['id'], $data['name'], $data['description'], $data['location'], $data['time']));
    $event = new LocationDecorator(new Event($data['id'], $data['name'], $data['description'], $data['location'], $data['time']));
    $events[] = $event;
}
