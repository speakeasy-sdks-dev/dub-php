<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class WebhookEventClick
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var string $continent
     */
    #[\JMS\Serializer\Annotation\SerializedName('continent')]
    public string $continent;

    /**
     *
     * @var string $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     *
     * @var string $city
     */
    #[\JMS\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     *
     * @var string $device
     */
    #[\JMS\Serializer\Annotation\SerializedName('device')]
    public string $device;

    /**
     *
     * @var string $browser
     */
    #[\JMS\Serializer\Annotation\SerializedName('browser')]
    public string $browser;

    /**
     *
     * @var string $os
     */
    #[\JMS\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     *
     * @var string $referer
     */
    #[\JMS\Serializer\Annotation\SerializedName('referer')]
    public string $referer;

    /**
     *
     * @var string $refererUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('refererUrl')]
    public string $refererUrl;

    /**
     *
     * @var ?bool $qr
     */
    #[\JMS\Serializer\Annotation\SerializedName('qr')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $qr = null;

    /**
     *
     * @var string $ip
     */
    #[\JMS\Serializer\Annotation\SerializedName('ip')]
    public string $ip;

    /**
     * @param  string  $id
     * @param  string  $url
     * @param  string  $continent
     * @param  string  $country
     * @param  string  $city
     * @param  string  $device
     * @param  string  $browser
     * @param  string  $os
     * @param  string  $referer
     * @param  string  $refererUrl
     * @param  string  $ip
     * @param  ?bool  $qr
     */
    public function __construct(string $id, string $url, string $continent, string $country, string $city, string $device, string $browser, string $os, string $referer, string $refererUrl, string $ip, ?bool $qr = null)
    {
        $this->id = $id;
        $this->url = $url;
        $this->continent = $continent;
        $this->country = $country;
        $this->city = $city;
        $this->device = $device;
        $this->browser = $browser;
        $this->os = $os;
        $this->referer = $referer;
        $this->refererUrl = $refererUrl;
        $this->ip = $ip;
        $this->qr = $qr;
    }
}