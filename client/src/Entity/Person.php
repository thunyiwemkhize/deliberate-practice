<?php

declare( strict_types = 1);

namespace App\Entity;
class Person{

    public ?string $id = null;

    public string $name = '';
    public string $surname = '';

    public bool $email = false;

}
