<?php

declare(strict_types=1);

namespace App\Service\Strategy;

use App\Entity\Invoice;

interface ParserStrategyInterface
{
    public function parse(): Invoice;
}