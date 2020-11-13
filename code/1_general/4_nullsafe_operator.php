<?php

/**
 * Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
 *
 * This material can not be copied and/or
 * distributed without the express permission of Temuri Takalandze.
 *
 * Written by Temuri Takalandze <me@abgeo.dev>, November 2020
 */

class Order
{
    public ?DateTime $returnDate = null;
}

$order = new Order();

$formattedReturnDate = $order->returnDate?->format('d/m/Y');

var_dump($formattedReturnDate);
