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
    final private function doSomething()
    {
        echo __METHOD__ . "\n";
    }

    public function do()
    {
        $this->doSomething();
    }
}

class Bar extends Foo
{
    private function doSomething()
    {
        echo __METHOD__ . "\n";
    }

    public function do()
    {
        $this->doSomething();
    }
}

$foo = new Foo();
$foo->do();

$bar = new Bar();
$bar->do();
