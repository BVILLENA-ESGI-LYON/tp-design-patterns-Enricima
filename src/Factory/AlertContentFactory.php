<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Product\AlertContentInterface;

interface AlertContentFactory
{
    public function createAccountValidationAlertContent(): AlertContentInterface;

    public function createEventRegistrationConfirmationAlertContent(): AlertContentInterface;

    public function createEventReminderAlertContent(): AlertContentInterface;
}
