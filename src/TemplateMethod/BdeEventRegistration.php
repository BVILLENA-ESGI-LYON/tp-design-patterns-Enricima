<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

use EsgiIw\TpDesignPattern\Entity\Event;

class BdeEventRegistration extends EventRegistrationTemplate
{
    protected function validate(Event $event): bool
    {
        // Logique de validation spécifique aux événements du BDE
        return true; // Pour simplifier, on suppose toujours que la validation est réussie
    }

    protected function onSuccess(Event $event): void
    {
        echo "Inscription à l'événement du BDE réussie.\n";
    }

    protected function onFailure(Event $event): void
    {
        echo "Impossible de s'inscrire à l'événement du BDE.\n";
    }
}
