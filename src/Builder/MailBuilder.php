<?php

namespace EsgiIw\TpDesignPattern\Builder;

use EsgiIw\TpDesignPattern\Builder\Mail;

class MailBuilder
{
    private $sender;
    private $recipients;
    private $subject;
    private $message;
    private $attachments = [];

    public function setSender(string $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function addRecipient(string $recipient): self
    {
        $this->recipients[] = $recipient;
        return $this;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function addAttachment(string $attachment): self
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    public function build(): Mail
    {
        return new Mail($this->sender, $this->recipients, $this->subject, $this->message, $this->attachments);
    }
}
