<?php

namespace EsgiIw\TpDesignPattern\Factory;

use EsgiIw\TpDesignPattern\Product\FileLoginAlert;
use EsgiIw\TpDesignPattern\Product\DatabaseLoginAlert;
use EsgiIw\TpDesignPattern\Product\MailLoginAlert;

class LoginAlertFactory
{
    public function createFileLoginAlert(): FileLoginAlert
    {
        return new FileLoginAlert();
    }

    public function createDatabaseLoginAlert(): DatabaseLoginAlert
    {
        return new DatabaseLoginAlert();
    }

    public function createMailLoginAlert(): MailLoginAlert
    {
        return new MailLoginAlert();
    }
}
