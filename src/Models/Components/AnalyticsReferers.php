<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class AnalyticsReferers
{
    /**
     * The name of the referer. If unknown, this will be `(direct)`
     *
     * @var string $referer
     */
    #[\JMS\Serializer\Annotation\SerializedName('referer')]
    public string $referer;

    /**
     * The number of clicks from this referer
     *
     * @var float $clicks
     */
    #[\JMS\Serializer\Annotation\SerializedName('clicks')]
    public float $clicks;

    /**
     * The number of leads from this referer
     *
     * @var float $leads
     */
    #[\JMS\Serializer\Annotation\SerializedName('leads')]
    public float $leads;

    /**
     * The number of sales from this referer
     *
     * @var float $sales
     */
    #[\JMS\Serializer\Annotation\SerializedName('sales')]
    public float $sales;

    /**
     * The total amount of sales from this referer
     *
     * @var float $saleAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('saleAmount')]
    public float $saleAmount;

    /**
     * @param  string  $referer
     * @param  float  $clicks
     * @param  float  $leads
     * @param  float  $sales
     * @param  float  $saleAmount
     */
    public function __construct(string $referer, float $clicks, float $leads, float $sales, float $saleAmount)
    {
        $this->referer = $referer;
        $this->clicks = $clicks;
        $this->leads = $leads;
        $this->sales = $sales;
        $this->saleAmount = $saleAmount;
    }
}