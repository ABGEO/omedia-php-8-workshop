<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

$code = <<<PHP
<?php
    echo 'Hello, World!';
PHP;


$tokens = token_get_all($code);
var_dump($tokens);

// VS

$tokens = PhpToken::tokenize($code);
var_dump($tokens);
