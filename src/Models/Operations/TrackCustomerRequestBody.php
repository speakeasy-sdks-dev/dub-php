<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackCustomerRequestBody
{
    /**
     * This is the unique identifier for the customer in the client's app. This is used to track the customer's journey.
     *
     * @var string $customerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerId')]
    public string $customerId;

    /**
     * Name of the customer in the client's app.
     *
     * @var ?string $customerName
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $customerName = null;

    /**
     * Email of the customer in the client's app.
     *
     * @var ?string $customerEmail
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerEmail')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $customerEmail = null;

    /**
     * Avatar of the customer in the client's app.
     *
     * @var ?string $customerAvatar
     */
    #[\JMS\Serializer\Annotation\SerializedName('customerAvatar')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $customerAvatar = null;

    /**
     * @param  string  $customerId
     * @param  ?string  $customerName
     * @param  ?string  $customerEmail
     * @param  ?string  $customerAvatar
     */
    public function __construct(string $customerId, ?string $customerName = null, ?string $customerEmail = null, ?string $customerAvatar = null)
    {
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerAvatar = $customerAvatar;
    }
}