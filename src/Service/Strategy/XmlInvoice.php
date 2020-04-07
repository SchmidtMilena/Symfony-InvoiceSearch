<?php

declare(strict_types=1);

namespace App\Service\Strategy;

use App\Entity\Invoice;
use App\Service\Strategy\ParserStrategyInterface;

class XmlInvoice implements ParserStrategyInterface
{
    public function parse(): Invoice
    {
        $invoice = new Invoice();
        //@todo parsing and adding fields
        return $invoice;
    }
}