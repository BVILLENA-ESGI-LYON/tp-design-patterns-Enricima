<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Product\AlertContentInterface;
use EsgiIw\TpDesignPattern\Product\SmsAlertContent;

class SmsAlertContentFactory implements AlertContentFactory
{
    public function createAccountValidationAlertContent(): AlertContentInterface
    {
        return new SmsAlertContent("Account validation SMS content");
    }

    public function createEventRegistrationConfirmationAlertContent(): AlertContentInterface
    {
        return new SmsAlertContent("Event registration confirmation SMS content");
    }

    public function createEventReminderAlertContent(): AlertContentInterface
    {
        return new SmsAlertContent("Event reminder SMS content");
    }
}
