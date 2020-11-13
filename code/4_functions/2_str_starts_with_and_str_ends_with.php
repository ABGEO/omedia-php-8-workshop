<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

str_starts_with('haystack', 'hay');   // true
str_starts_with('haystack', 'stack'); // false

str_ends_with('haystack', 'hay');     // false
str_ends_with('haystack', 'stack');   // true
