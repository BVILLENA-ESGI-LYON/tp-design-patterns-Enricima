<?php

namespace EsgiIw\TpDesignPattern\AbstractFactory;

interface AlertContentFactory
{
    public function createAlertContent(): AlertContent;
}
