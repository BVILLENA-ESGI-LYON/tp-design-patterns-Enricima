<?php

require_once 'src/Builder/MailBuilder.php';

use EsgiIw\TpDesignPattern\Builder\MailBuilder;

// Test du Builder
$mailBuilder = new MailBuilder();
$mail = $mailBuilder
    ->setSender('sender@example.com')
    ->addRecipient('recipient1@example.com')
    ->addRecipient('recipient2@example.com')
    ->setSubject('Test Mail')
    ->setMessage('This is a test mail.')
    ->addAttachment('file1.txt')
    ->addAttachment('file2.txt')
    ->build();

echo "Mail created:\n";
print_r($mail);
