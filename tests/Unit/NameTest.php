<?php

namespace Guil95\Tests\Unit;

use Guil95\Vos\Email;
use Guil95\Vos\Name;
use Guil95\Vos\VoInvalidException;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testInvalidNameWithInvalidCharacterShouldReturnNameWithoutSpecialCharacter()
    {
        $invalidName = 'Guil5565#$##$%%$#herme';
        $name = new Name($invalidName);

        self::assertEquals('Guilherme', $name->getValue());
    }

    public function testValidNameShouldGetValueReturnValidName()
    {
        $validName= 'Guilherme';

        $name = new Name($validName);

        self::assertEquals($validName, $name->getValue());
    }
}
