<?php

require_once 'src/Factory/AlertContentFactory.php';

use EsgiIw\TpDesignPattern\Factory\AlertContentFactory;
use EsgiIw\TpDesignPattern\Factory\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Factory\SmsAlertContentFactory;

// Test de l'Abstract Factory
$emailAlertContentFactory = new EmailAlertContentFactory();
$smsAlertContentFactory = new SmsAlertContentFactory();

$emailAlertContent = $emailAlertContentFactory->createAccountValidationAlertContent();
$emailAlertContent->createContent();

$smsAlertContent = $smsAlertContentFactory->createEventRegistrationConfirmationAlertContent();
$smsAlertContent->createContent();
