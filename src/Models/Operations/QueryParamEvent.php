<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The type of event to retrieve analytics for. Defaults to 'clicks'. */
enum QueryParamEvent: string
{
    case Clicks = 'clicks';
    case Leads = 'leads';
    case Sales = 'sales';
}
