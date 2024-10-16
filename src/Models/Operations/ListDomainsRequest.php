<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class ListDomainsRequest
{
    /**
     * Whether to include archived domains in the response. Defaults to `false` if not provided.
     *
     * @var ?bool $archived
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=archived')]
    public ?bool $archived = null;

    /**
     * The search term to filter the domains by.
     *
     * @var ?string $search
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;

    /**
     * The page number for pagination.
     *
     * @var ?float $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?float $page = null;

    /**
     * The number of items per page.
     *
     * @var ?float $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pageSize')]
    public ?float $pageSize = null;

    /**
     * @param  ?bool  $archived
     * @param  ?string  $search
     * @param  ?float  $page
     * @param  ?float  $pageSize
     */
    public function __construct(?bool $archived = null, ?string $search = null, ?float $page = null, ?float $pageSize = null)
    {
        $this->archived = $archived;
        $this->search = $search;
        $this->page = $page;
        $this->pageSize = $pageSize;
    }
}