<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

// Throw exceptions in arrow functions.

$triggerError = fn () => throw new Exception();

$triggerError();

// Throw exceptions with null coalescing operator

function getItem(mixed $key): mixed {
    $data = [
        1 => 'Hello',
        2 => 'World',
    ];

    return $data[$key] ?? throw new Exception("Invalid key '{$key}'!");
}

echo getItem(1);
echo getItem(10);
