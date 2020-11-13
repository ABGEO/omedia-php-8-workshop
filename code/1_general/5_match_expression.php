<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

$day = 3;

$dayType = match($day) {
    1, 2, 3, 4, 5 => 'Weekday',
    6, 7 => 'Weekend',
    default => 'Invalid day number',
};

echo "{$day}: {$dayType}\n";
