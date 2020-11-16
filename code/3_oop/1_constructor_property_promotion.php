<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

class Person
{
    public string $firstName;

    public string $lastName;

    public function __construct(
        string $firstName,
        string $lastName,
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

// VS

class Person
{
    public function __construct(
        public string $firstName,
        public string $lastName,
    ) {}
}

$person = new Person('John', 'Doe');

echo "{$person->firstName} {$person->lastName}\n";
