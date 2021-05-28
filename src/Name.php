<?php

namespace Guil95\Vos;

class Name
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = preg_replace('/[0-9!@#$%^&*()_+\-=\[\]{};\':"\\\\|,.<>\/?¨`´]*/m', "", $value);
    }

    public function getValue()
    {
        return $this->value;
    }
}
