<?php

declare( strict_types = 1);

namespace App\Service;
use App\Entity\Person;

class PersonService {

    public function __construct(){

    }

    public function getPeople(): array
    {
       return $this->makePeople();
    }

    private function makePeople(): array {
        $names = array(
            'Christopher',
            'Ryan',
            'Ethan',
            'John',
            'Zoey',
            'Sarah',
            'Michelle',
            'Samantha',
        );

        $surnames = array(
            'Walker',
            'Thompson',
            'Anderson',
            'Johnson',
            'Tremblay',
            'Peltier',
            'Cunningham',
            'Simpson',
            'Mercado',
            'Sellers'
        );
        $people = [];
        for ($i = 0; $i < 20; $i++){
            $person = new Person();
            $person->name = $names[random_int(0, 7)];
            $person->surname = $surnames[random_int(0, 9)];
            $person[] =  $person;
        }
        return $people;
    }

}
