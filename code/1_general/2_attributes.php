<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

#[Attribute]
class AttributeFoo
{
    public function __construct($value)
    {
        var_dump($value);
    }
}

#[Attribute]
class AttributeBar
{
    public function __construct($value)
    {
        var_dump($value);
    }
}

#[AttributeFoo("Foo")]
class Baz {}

$baz = new Baz();
$reflection = new ReflectionClass($baz);
$attributes = $reflection->getAttributes();

var_dump($attributes);

foreach ($attributes as $attribute) {
    $attribute->newInstance();
}
