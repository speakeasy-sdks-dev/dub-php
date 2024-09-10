<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class BulkUpdateLinksRequestBody
{
    /**
     * $linkIds
     *
     * @var array<string> $linkIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('linkIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $linkIds;

    /**
     *
     * @var Data $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Operations\Data')]
    public Data $data;

    /**
     * @param  array<string>  $linkIds
     * @param  Data  $data
     */
    public function __construct(array $linkIds, Data $data)
    {
        $this->linkIds = $linkIds;
        $this->data = $data;
    }
}