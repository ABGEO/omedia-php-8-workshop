<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

// Union types in function

function foo(int|string $input): int|float
{
    if (is_int($input)) {
        return 1;
    }

    return 1.0;
}

var_dump(foo(1));
var_dump(foo('1'));
var_dump(foo([]));

// Union types in class

class Foo
{
    public int|string $bar;
}

$foo = new Foo();

$foo->bar = 1;
var_dump($foo->bar);

$foo->bar = "Hello";
var_dump($foo->bar);

$foo->bar = [];
var_dump($foo->bar);
