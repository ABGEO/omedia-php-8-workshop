<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

trait Foo
{
    abstract public function baz(int $bar): int;
}

class Bar
{
    use Foo;

    public function baz($bar)
    {
        return $bar;
    }
}

// VS

class Bar
{
    use Foo;

    public function baz(int $bar): int
    {
        return $bar;
    }
}

$bar = new Bar();
