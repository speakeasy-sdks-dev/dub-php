<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Domains
{
    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * Whether the domain is the primary domain for the workspace.
     *
     * @var ?bool $primary
     */
    #[\JMS\Serializer\Annotation\SerializedName('primary')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $primary = null;

    /**
     * Whether the domain is verified.
     *
     * @var ?bool $verified
     */
    #[\JMS\Serializer\Annotation\SerializedName('verified')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $verified = null;

    /**
     * @param  string  $slug
     * @param  ?bool  $primary
     * @param  ?bool  $verified
     */
    public function __construct(string $slug, ?bool $primary = false, ?bool $verified = false)
    {
        $this->slug = $slug;
        $this->primary = $primary;
        $this->verified = $verified;
    }
}