<?php

namespace EsgiIw\TpDesignPattern\Builder;

class Mail
{
    private $to;
    private $cc;
    private $subject;
    private $message;
    private $attachments;

    public function __construct(string $to, string $cc, string $subject, string $message, array $attachments = [])
    {
        $this->to = $to;
        $this->cc = $cc;
        $this->subject = $subject;
        $this->message = $message;
        $this->attachments = $attachments;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function getCc(): string
    {
        return $this->cc;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }
}
