<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

class Foo {}

$foo = new Foo();
$bar = 0;
$baz = 0.1;

var_dump(gettype($foo)); // "object"
var_dump(gettype($bar)); // "integer"
var_dump(gettype($baz)); // "double"

// VS

var_dump(get_debug_type($foo)); // "Foo"
var_dump(get_debug_type($bar)); // "int"
var_dump(get_debug_type($baz)); // "float"
