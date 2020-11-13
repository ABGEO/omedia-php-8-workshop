<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

function foo(mixed $something): mixed
{
    return $something;
}

var_dump(foo(1));
var_dump(foo(1.0));
var_dump(foo("foo"));
var_dump(foo([1, 2]));
