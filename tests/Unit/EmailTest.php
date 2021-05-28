<?php

namespace Guil95\Tests\Unit;

use Guil95\Vos\Email;
use Guil95\Vos\Name;
use Guil95\Vos\VoInvalidException;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testInvalidEmailShouldThrowVoInvalidExeception()
    {
        $invalidEmail = 'Guilherme';
        $this->expectException(VoInvalidException::class);
        $this->expectExceptionMessage(sprintf('Invalid email for value %s', $invalidEmail));

        new Email($invalidEmail);
    }

    public function testValidEmailShouldGetValueReturnValidEmail()
    {
        $validEmail = 'guilherme@email.com';

        $email = new Email($validEmail);

        self::assertEquals($validEmail, $email->getValue());
    }
}
