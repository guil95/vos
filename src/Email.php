<?php

namespace Guil95\Vos;

class Email
{
    private string $value;

    public function __construct(string $value)
    {
        $this->validEmail($value);
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    private function validEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new VoInvalidException(sprintf('Invalid email for value %s', $email));
        }
    }
}
