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

function getItem($key) {
    $data = [
        1 => 'Hello',
        2 => 'World',
    ];

    if (!isset($data[$key])) {
        throw new Exception("Invalid key '{$key}'!");
    }

    return $data[$key];
}

// VS

function getItem($key) {
    $data = [
        1 => 'Hello',
        2 => 'World',
    ];

    return $data[$key] ?? throw new Exception("Invalid key '{$key}'!");
}

getItem(1);
getItem(10);
