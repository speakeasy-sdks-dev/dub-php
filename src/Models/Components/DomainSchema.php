<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class DomainSchema
{
    /**
     * The unique identifier of the domain.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    /**
     * The domain name.
     *
     * @var string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;

    /**
     * Whether the domain is verified.
     *
     * @var bool $verified
     */
    #[\JMS\Serializer\Annotation\SerializedName('verified')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $verified;

    /**
     * Whether the domain is the primary domain for the workspace.
     *
     * @var bool $primary
     */
    #[\JMS\Serializer\Annotation\SerializedName('primary')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $primary;

    /**
     * Whether the domain is archived.
     *
     * @var bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $archived;

    /**
     * Provide context to your teammates in the link creation modal by showing them an example of a link to be shortened.
     *
     * @var string $placeholder
     */
    #[\JMS\Serializer\Annotation\SerializedName('placeholder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $placeholder;

    /**
     * The URL to redirect to when a link under this domain has expired.
     *
     * @var string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiredUrl;

    /**
     * The date the domain was created.
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;

    /**
     * The date the domain was last updated.
     *
     * @var string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $updatedAt;

    public function __construct()
    {
        $this->id = '';
        $this->slug = '';
        $this->verified = false;
        $this->primary = false;
        $this->archived = false;
        $this->placeholder = '';
        $this->expiredUrl = '';
        $this->createdAt = '';
        $this->updatedAt = '';
    }
}