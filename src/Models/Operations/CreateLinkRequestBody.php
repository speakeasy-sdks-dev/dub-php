<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Models\Components;
class CreateLinkRequestBody
{
    /**
     * The destination URL of the short link.
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * The domain of the short link. If not provided, the primary domain for the workspace will be used (or `dub.sh` if the workspace has no domains).
     *
     * @var ?string $domain
     */
    #[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $domain = null;

    /**
     * The short link slug. If not provided, a random 7-character slug will be generated.
     *
     * @var ?string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $key = null;

    /**
     * This is the ID of the link in your database. If set, it can be used to identify the link in the future. Must be prefixed with `ext_` when passed as a query parameter.
     *
     * @var ?string $externalId
     */
    #[\JMS\Serializer\Annotation\SerializedName('externalId')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     * The prefix of the short link slug for randomly-generated keys (e.g. if prefix is `/c/`, generated keys will be in the `/c/:key` format). Will be ignored if `key` is provided.
     *
     * @var ?string $prefix
     */
    #[\JMS\Serializer\Annotation\SerializedName('prefix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $prefix = null;

    /**
     * Whether to track conversions for the short link.
     *
     * @var ?bool $trackConversion
     */
    #[\JMS\Serializer\Annotation\SerializedName('trackConversion')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $trackConversion = null;

    /**
     * Whether the short link is archived.
     *
     * @var ?bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $archived = null;

    /**
     * Whether the short link's stats are publicly accessible.
     *
     * @var ?bool $publicStats
     */
    #[\JMS\Serializer\Annotation\SerializedName('publicStats')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $publicStats = null;

    /**
     * The unique ID of the tag assigned to the short link. This field is deprecated – use `tagIds` instead.
     *
     * @var ?string $tagId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagId')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $tagId = null;

    /**
     * The unique IDs of the tags assigned to the short link.
     *
     * @var string|array<string>|null $tagIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagIds')]
    #[\JMS\Serializer\Annotation\Type('string|array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var string|array<string>|null $tagNames
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagNames')]
    #[\JMS\Serializer\Annotation\Type('string|array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|array|null $tagNames = null;

    /**
     * The comments for the short link.
     *
     * @var ?string $comments
     */
    #[\JMS\Serializer\Annotation\SerializedName('comments')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $comments = null;

    /**
     * The date and time when the short link will expire at.
     *
     * @var ?string $expiresAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiresAt')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $expiresAt = null;

    /**
     * The URL to redirect to when the short link has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $expiredUrl = null;

    /**
     * The password required to access the destination URL of the short link.
     *
     * @var ?string $password
     */
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $password = null;

    /**
     * Whether the short link uses Custom Social Media Cards feature.
     *
     * @var ?bool $proxy
     */
    #[\JMS\Serializer\Annotation\SerializedName('proxy')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $proxy = null;

    /**
     * The custom link preview title (og:title). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The custom link preview description (og:description). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The custom link preview image (og:image). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $image
     */
    #[\JMS\Serializer\Annotation\SerializedName('image')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $image = null;

    /**
     * The custom link preview video (og:video). Will be used for Custom Social Media Cards if `proxy` is true. Learn more: https://d.to/og
     *
     * @var ?string $video
     */
    #[\JMS\Serializer\Annotation\SerializedName('video')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $video = null;

    /**
     * Whether the short link uses link cloaking.
     *
     * @var ?bool $rewrite
     */
    #[\JMS\Serializer\Annotation\SerializedName('rewrite')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $rewrite = null;

    /**
     * The iOS destination URL for the short link for iOS device targeting.
     *
     * @var ?string $ios
     */
    #[\JMS\Serializer\Annotation\SerializedName('ios')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ios = null;

    /**
     * The Android destination URL for the short link for Android device targeting.
     *
     * @var ?string $android
     */
    #[\JMS\Serializer\Annotation\SerializedName('android')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $android = null;

    /**
     * Geo targeting information for the short link in JSON format `{[COUNTRY]: https://example.com }`.
     *
     * @var ?Components\LinkGeoTargeting $geo
     */
    #[\JMS\Serializer\Annotation\SerializedName('geo')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\LinkGeoTargeting|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Components\LinkGeoTargeting $geo = null;

    /**
     * Allow search engines to index your short link. Defaults to `false` if not provided. Learn more: https://d.to/noindex
     *
     * @var ?bool $doIndex
     */
    #[\JMS\Serializer\Annotation\SerializedName('doIndex')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $doIndex = null;

    /**
     * The UTM source of the short link. If set, this will populate or override the UTM source in the destination URL.
     *
     * @var ?string $utmSource
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_source')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $utmSource = null;

    /**
     * The UTM medium of the short link. If set, this will populate or override the UTM medium in the destination URL.
     *
     * @var ?string $utmMedium
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_medium')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $utmMedium = null;

    /**
     * The UTM campaign of the short link. If set, this will populate or override the UTM campaign in the destination URL.
     *
     * @var ?string $utmCampaign
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_campaign')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $utmCampaign = null;

    /**
     * The UTM term of the short link. If set, this will populate or override the UTM term in the destination URL.
     *
     * @var ?string $utmTerm
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_term')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $utmTerm = null;

    /**
     * The UTM content of the short link. If set, this will populate or override the UTM content in the destination URL.
     *
     * @var ?string $utmContent
     */
    #[\JMS\Serializer\Annotation\SerializedName('utm_content')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $utmContent = null;

    /**
     * The referral tag of the short link. If set, this will populate or override the `ref` query parameter in the destination URL.
     *
     * @var ?string $ref
     */
    #[\JMS\Serializer\Annotation\SerializedName('ref')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ref = null;

    /**
     * @param  string  $url
     * @param  ?string  $domain
     * @param  ?string  $key
     * @param  ?string  $prefix
     * @param  ?bool  $trackConversion
     * @param  ?bool  $archived
     * @param  ?bool  $publicStats
     * @param  string|array<string>|null  $tagIds
     * @param  string|array<string>|null  $tagNames
     * @param  ?bool  $proxy
     * @param  ?bool  $rewrite
     * @param  ?bool  $doIndex
     * @param  ?string  $externalId
     * @param  ?string  $tagId
     * @param  ?string  $comments
     * @param  ?string  $expiresAt
     * @param  ?string  $expiredUrl
     * @param  ?string  $password
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?string  $image
     * @param  ?string  $video
     * @param  ?string  $ios
     * @param  ?string  $android
     * @param  ?Components\LinkGeoTargeting  $geo
     * @param  ?string  $utmSource
     * @param  ?string  $utmMedium
     * @param  ?string  $utmCampaign
     * @param  ?string  $utmTerm
     * @param  ?string  $utmContent
     * @param  ?string  $ref
     */
    public function __construct(string $url, ?string $domain = null, ?string $key = null, ?string $prefix = null, ?bool $trackConversion = null, ?bool $archived = null, ?bool $publicStats = null, string|array|null $tagIds = null, string|array|null $tagNames = null, ?bool $proxy = null, ?bool $rewrite = null, ?bool $doIndex = null, ?string $externalId = null, ?string $tagId = null, ?string $comments = null, ?string $expiresAt = null, ?string $expiredUrl = null, ?string $password = null, ?string $title = null, ?string $description = null, ?string $image = null, ?string $video = null, ?string $ios = null, ?string $android = null, ?Components\LinkGeoTargeting $geo = null, ?string $utmSource = null, ?string $utmMedium = null, ?string $utmCampaign = null, ?string $utmTerm = null, ?string $utmContent = null, ?string $ref = null)
    {
        $this->url = $url;
        $this->domain = $domain;
        $this->key = $key;
        $this->prefix = $prefix;
        $this->trackConversion = $trackConversion;
        $this->archived = $archived;
        $this->publicStats = $publicStats;
        $this->tagIds = $tagIds;
        $this->tagNames = $tagNames;
        $this->proxy = $proxy;
        $this->rewrite = $rewrite;
        $this->doIndex = $doIndex;
        $this->externalId = $externalId;
        $this->tagId = $tagId;
        $this->comments = $comments;
        $this->expiresAt = $expiresAt;
        $this->expiredUrl = $expiredUrl;
        $this->password = $password;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->video = $video;
        $this->ios = $ios;
        $this->android = $android;
        $this->geo = $geo;
        $this->utmSource = $utmSource;
        $this->utmMedium = $utmMedium;
        $this->utmCampaign = $utmCampaign;
        $this->utmTerm = $utmTerm;
        $this->utmContent = $utmContent;
        $this->ref = $ref;
    }
}