<?php

namespace EsgiIw\TpDesignPattern\Entity;

class Event
{
    private $id;
    private $name;
    private $description;
    private $location;
    private $time;

    public function __construct(int $id, string $name, string $description, string $location, string $time)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->location = $location;
        $this->time = $time;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getTime(): string
    {
        return $this->time;
    }
}
