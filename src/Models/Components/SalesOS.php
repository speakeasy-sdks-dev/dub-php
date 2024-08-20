<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class SalesOS
{
    /**
     * The name of the OS
     *
     * @var string $os
     */
    #[\JMS\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     * The number of sales from this OS
     *
     * @var float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    public float $sales;

    /**
     * The total amount of sales from this OS
     *
     * @var float $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     * @param  ?string  $os
     * @param  ?float  $sales
     * @param  ?float  $amount
     */
    public function __construct(?string $os = null, ?float $sales = null, ?float $amount = null)
    {
        $this->os = $os;
        $this->sales = $sales;
        $this->amount = $amount;
    }
}