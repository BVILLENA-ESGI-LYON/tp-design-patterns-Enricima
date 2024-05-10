<?php

require_once 'src/Template/EventRegistration.php';

use EsgiIw\TpDesignPattern\Entity\Event;
use EsgiIw\TpDesignPattern\TemplateMethod\EventRegistrationTemplate;

// Test du Template Method
$event1 = new EventRegistrationTemplate('Sport Event');
$event1->validate(new Event(1, "test", "descr", "ici", "20mn"));

$event2 = new EventRegistrationTemplate('BDE Event');
$event2->validate(new Event(1, "test", "descr", "ici", "20mn"));
