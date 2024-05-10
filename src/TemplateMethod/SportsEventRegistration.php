<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

use EsgiIw\TpDesignPattern\Entity\Event;

class SportsEventRegistration extends EventRegistrationTemplate
{
    protected function validate(Event $event): bool
    {
        // Logique de validation spécifique aux événements sportifs
        return true; // Pour simplifier, on suppose toujours que la validation est réussie
    }

    protected function onSuccess(Event $event): void
    {
        echo "Inscription à l'événement sportif réussie.\n";
    }

    protected function onFailure(Event $event): void
    {
        echo "Impossible de s'inscrire à l'événement sportif.\n";
    }
}
