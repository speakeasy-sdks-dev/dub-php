<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Models\Components;
use Dub\Utils\SpeakeasyMetadata;
class ListEventsRequest
{
    /**
     * The type of event to retrieve analytics for. Defaults to 'clicks'.
     *
     * @var ?QueryParamEvent $event
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=event')]
    public ?QueryParamEvent $event = null;

    /**
     * The domain to filter analytics for.
     *
     * @var ?string $domain
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=domain')]
    public ?string $domain = null;

    /**
     * The short link slug.
     *
     * @var ?string $key
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=key')]
    public ?string $key = null;

    /**
     * The unique ID of the short link on Dub.
     *
     * @var ?string $linkId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=linkId')]
    public ?string $linkId = null;

    /**
     * This is the ID of the link in the your database. Must be prefixed with 'ext_' when passed as a query parameter.
     *
     * @var ?string $externalId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=externalId')]
    public ?string $externalId = null;

    /**
     * The interval to retrieve events for. Takes precedence over start and end. If undefined, defaults to 24h.
     *
     * @var ?QueryParamInterval $interval
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interval')]
    public ?QueryParamInterval $interval = null;

    /**
     * The start date and time when to retrieve analytics from.
     *
     * @var ?string $start
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start')]
    public ?string $start = null;

    /**
     * The end date and time when to retrieve analytics from. If not provided, defaults to the current date.
     *
     * @var ?string $end
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end')]
    public ?string $end = null;

    /**
     * The IANA time zone code for aligning timeseries granularity (e.g. America/New_York). Defaults to UTC.
     *
     * @var ?string $timezone
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=timezone')]
    public ?string $timezone = null;

    /**
     * The continent to retrieve analytics for.
     *
     * @var ?Components\ContinentCode $continent
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=continent')]
    public ?Components\ContinentCode $continent = null;

    /**
     * The country to retrieve analytics for.
     *
     * @var ?Components\CountryCode $country
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=country')]
    public ?Components\CountryCode $country = null;

    /**
     * The city to retrieve analytics for.
     *
     * @var ?string $city
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=city')]
    public ?string $city = null;

    /**
     * The device to retrieve analytics for.
     *
     * @var ?string $device
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=device')]
    public ?string $device = null;

    /**
     * The browser to retrieve analytics for.
     *
     * @var ?string $browser
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=browser')]
    public ?string $browser = null;

    /**
     * The OS to retrieve analytics for.
     *
     * @var ?string $os
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=os')]
    public ?string $os = null;

    /**
     * The referer to retrieve analytics for.
     *
     * @var ?string $referer
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=referer')]
    public ?string $referer = null;

    /**
     * The full referer URL to retrieve analytics for.
     *
     * @var ?string $refererUrl
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=refererUrl')]
    public ?string $refererUrl = null;

    /**
     * The URL to retrieve analytics for.
     *
     * @var ?string $url
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=url')]
    public ?string $url = null;

    /**
     * The tag ID to retrieve analytics for.
     *
     * @var ?string $tagId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagId')]
    public ?string $tagId = null;

    /**
     * Filter for QR code scans. If true, filter for QR codes only. If false, filter for links only. If undefined, return both.
     *
     * @var ?bool $qr
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=qr')]
    public ?bool $qr = null;

    /**
     * Filter for root domains. If true, filter for domains only. If false, filter for links only. If undefined, return both.
     *
     * @var ?bool $root
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=root')]
    public ?bool $root = null;

    /**
     *
     * @var ?float $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?float $page = null;

    /**
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    /**
     *
     * @var ?Order $order
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order')]
    public ?Order $order = null;

    /**
     *
     * @var ?SortBy $sortBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortBy')]
    public ?SortBy $sortBy = null;

    /**
     * @param  ?QueryParamEvent  $event
     * @param  ?string  $domain
     * @param  ?string  $key
     * @param  ?string  $linkId
     * @param  ?string  $externalId
     * @param  ?QueryParamInterval  $interval
     * @param  ?string  $start
     * @param  ?string  $end
     * @param  ?string  $timezone
     * @param  ?Components\ContinentCode  $continent
     * @param  ?Components\CountryCode  $country
     * @param  ?string  $city
     * @param  ?string  $device
     * @param  ?string  $browser
     * @param  ?string  $os
     * @param  ?string  $referer
     * @param  ?string  $refererUrl
     * @param  ?string  $url
     * @param  ?string  $tagId
     * @param  ?bool  $qr
     * @param  ?bool  $root
     * @param  ?float  $page
     * @param  ?float  $limit
     * @param  ?Order  $order
     * @param  ?SortBy  $sortBy
     */
    public function __construct(?string $domain = null, ?string $key = null, ?string $linkId = null, ?string $externalId = null, ?string $start = null, ?string $end = null, ?Components\ContinentCode $continent = null, ?Components\CountryCode $country = null, ?string $city = null, ?string $device = null, ?string $browser = null, ?string $os = null, ?string $referer = null, ?string $refererUrl = null, ?string $url = null, ?string $tagId = null, ?bool $qr = null, ?bool $root = null, ?QueryParamEvent $event = QueryParamEvent::Clicks, ?QueryParamInterval $interval = QueryParamInterval::TwentyFourh, ?string $timezone = 'UTC', ?float $page = 1, ?float $limit = 100, ?Order $order = Order::Desc, ?SortBy $sortBy = SortBy::Timestamp)
    {
        $this->event = $event;
        $this->domain = $domain;
        $this->key = $key;
        $this->linkId = $linkId;
        $this->externalId = $externalId;
        $this->interval = $interval;
        $this->start = $start;
        $this->end = $end;
        $this->timezone = $timezone;
        $this->continent = $continent;
        $this->country = $country;
        $this->city = $city;
        $this->device = $device;
        $this->browser = $browser;
        $this->os = $os;
        $this->referer = $referer;
        $this->refererUrl = $refererUrl;
        $this->url = $url;
        $this->tagId = $tagId;
        $this->qr = $qr;
        $this->root = $root;
        $this->page = $page;
        $this->limit = $limit;
        $this->order = $order;
        $this->sortBy = $sortBy;
    }
}