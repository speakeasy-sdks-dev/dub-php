<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsOS
{
    /**
     * The name of the OS
     *
     * @var string $os
     */
    #[\JMS\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     * The number of clicks from this OS
     *
     * @var float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    public float $clicks;

    /**
     * The number of leads from this OS
     *
     * @var float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    public float $leads;

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
     * @var float $saleAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('saleAmount')]
    public float $saleAmount;

    /**
     * @param  string  $os
     * @param  float  $clicks
     * @param  float  $leads
     * @param  float  $sales
     * @param  float  $saleAmount
     */
    public function __construct(string $os, float $clicks, float $leads, float $sales, float $saleAmount)
    {
        $this->os = $os;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}