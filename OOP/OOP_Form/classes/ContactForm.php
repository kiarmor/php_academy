<?php

declare(strict_types=1);

class ContactForm
{
    /**
     * @var string/null
     */
    public $email;

    /**
     * @var string/null
     */
    public $message;

    /**
     * @var array
     * TODO write class UploadedFile with 5 properties $_FILES
     */
    public $attachment;

    /**
     * ContactForm constructor.
     * @param string $email
     * @param string $message
     * @param array $attachment
     */
    public function __construct(?string $email, ?string $message, ?array $attachment)
    {
        $this->email = $email;
        $this->message = $message;
        $this->attachment = $attachment;
    }

    public function isValid(): bool
    {
        return !empty(trim($this->email)) && !empty(trim($this->message));
    }
}