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
    private WeakMap $cache;

    public function __construct()
    {
        $this->cache = new WeakMap();
    }

    public function getSomethingWithCaching(object $obj)
    {
        echo __METHOD__ . "\n";

        return $this->cache[$obj] ??= $this->computeSomethingExpensive($obj);
    }

    public function computeSomethingExpensive(object $obj)
    {
        echo __METHOD__ . "\n";

        for ($i = 0; $i < 1000000; $i++) {
            $obj->foo = $i;
        }

        return $obj->foo;
    }
}

$foo = new Foo();
$object = new stdClass();
$foo->getSomethingWithCaching($object);

echo "\n-----------------------------\n\n";

$foo->getSomethingWithCaching($object);

echo "\n-----------------------------\n\n";

$object = new stdClass();
$foo->getSomethingWithCaching($object);
