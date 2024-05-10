<?php

require_once 'src/Observer/EventSubject.php';
require_once 'src/Observer/EventObserver.php';
require_once 'src/Entity/Event.php'; // Assurez-vous d'avoir importé la classe Event si nécessaire

use EsgiIw\TpDesignPattern\Observer\EventSubject;
use EsgiIw\TpDesignPattern\Observer\EventObserver;
use EsgiIw\TpDesignPattern\Entity\Event;

// Test du Observer
$subject = new EventSubject();

$observer1 = new EventObserver('Observer 1');
$observer2 = new EventObserver('Observer 2');
$observer3 = new EventObserver('Observer 3');

$subject->attach($observer1);
$subject->attach($observer2);
$subject->attach($observer3);

$event = new Event(1, 'Sample Event', 'Sample description', 'Sample location', '2024-05-10');

$subject->modifyEvent($event); // Déclenche l'action de modification de l'événement
