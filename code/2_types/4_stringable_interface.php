<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

class Foo
{
    public function __toString(): string
    {
        return 'Hello from ' . __METHOD__;
    }
}

class Bar extends Foo
{
    public function __toString(): string
    {
        return 'Hello from ' . __METHOD__;
    }
}

class Baz {}

function doEcho(string|Stringable $stringable): void
{
    echo "{$stringable}\n";
}

doEcho("Hello");
doEcho(new Foo());
doEcho(new Bar());
doEcho(new Baz());
