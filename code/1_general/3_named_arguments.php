<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

function drawImage(
    string $src,
    ?int $height = null,
    ?int $width = null,
    ?string $alt = null
) {
    var_dump($src);
    var_dump($height);
    var_dump($width);
    var_dump($alt);

    // Some stuff for drawing an image ...
}

drawImage('img.png', null, null, 'Some image');

// VS

drawImage(src: 'img.png', alt: 'Some image');
