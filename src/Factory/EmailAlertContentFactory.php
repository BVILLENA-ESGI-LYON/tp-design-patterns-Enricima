<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Product\AlertContentInterface;
use EsgiIw\TpDesignPattern\Product\EmailAlertContent;

class EmailAlertContentFactory implements AlertContentFactory
{
    public function createAccountValidationAlertContent(): AlertContentInterface
    {
        return new EmailAlertContent("Account validation email content");
    }

    public function createEventRegistrationConfirmationAlertContent(): AlertContentInterface
    {
        return new EmailAlertContent("Event registration confirmation email content");
    }

    public function createEventReminderAlertContent(): AlertContentInterface
    {
        return new EmailAlertContent("Event reminder email content");
    }
}
