<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'function_get_resource_id.php', 'r');

$resourceId = (int) $resource;
var_dump($resourceId);

$resourceId = get_resource_id($resource);
var_dump($resourceId);

fclose($resource);
