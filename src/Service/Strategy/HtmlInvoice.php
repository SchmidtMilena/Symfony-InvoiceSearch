<?php

declare(strict_types=1);

namespace App\Service\Strategy;

use App\Service\Strategy\ParserStrategyInterface;
use App\Entity\Invoice;

class HtmlInvoice implements ParserStrategyInterface
{
    public function parse(): Invoice
    {
        $invoice = new Invoice();
        //@todo parsing and adding fields
        return $invoice;
    }
}