# Vos
Value objects common

# How to install
```bash
$ composer require guil95/vos
```

#How to use
```php 
<?php
namespace MyNamespace;

use Guil95\Vos;

$email = new Email('invalidEmail'); // throws VoInvalidException
$email = new Email('gui@email.com'); // $email->getvalue() returns gui@email.com

$name = new Name('Name%$invalid Ch4aract8er'); // $name->getValue() returns Nameinvalid Character
$name = new Name('Name Gui'); // $name->getValue() returns Name Gui
```