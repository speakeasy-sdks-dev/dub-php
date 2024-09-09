<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class Sale
{
    /**
     *
     * @var float $amount
     */
    #[\JMS\Serializer\Annotation\SerializedName('amount')]
    public float $amount;

    /**
     *
     * @var string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     *
     * @var string $paymentProcessor
     */
    #[\JMS\Serializer\Annotation\SerializedName('paymentProcessor')]
    public string $paymentProcessor;

    /**
     *
     * @var ?string $invoiceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('invoiceId')]
    public ?string $invoiceId;

    /**
     * $metadata
     *
     * @var ?array<string, mixed> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    public ?array $metadata;

    /**
     * @param  float  $amount
     * @param  string  $currency
     * @param  string  $paymentProcessor
     * @param  ?string  $invoiceId
     * @param  ?array<string, mixed>  $metadata
     */
    public function __construct(float $amount, string $currency, string $paymentProcessor, ?string $invoiceId = null, ?array $metadata = null)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->paymentProcessor = $paymentProcessor;
        $this->invoiceId = $invoiceId;
        $this->metadata = $metadata;
    }
}