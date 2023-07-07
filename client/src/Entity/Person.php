<?php

declare( strict_types = 1);

namespace App\Entity;

use phpDocumentor\Reflection\Types\Integer;

class Person {

    # Please note that this was just an example of how to use column attributes. It's not connected to the database
  #[
		Assert\NotBlank,
        ORM\Column(),
        ORM\GeneratedValue(strategy: 'CUSTOM'),
    ]
    public string $name = '';
    public string $surname = '';
}
