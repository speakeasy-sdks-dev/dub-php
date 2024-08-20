<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class GetQRCodeRequest
{
    /**
     * The URL to generate a QR code for.
     *
     * @var string $url
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=url')]
    public string $url;

    /**
     * The size of the QR code in pixels. Defaults to `600` if not provided.
     *
     * @var ?float $size
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=size')]
    public ?float $size = null;

    /**
     * The level of error correction to use for the QR code. Defaults to `L` if not provided.
     *
     * @var ?Level $level
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=level')]
    public ?Level $level = null;

    /**
     * The foreground color of the QR code in hex format. Defaults to `#000000` if not provided.
     *
     * @var ?string $fgColor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fgColor')]
    public ?string $fgColor = null;

    /**
     * The background color of the QR code in hex format. Defaults to `#ffffff` if not provided.
     *
     * @var ?string $bgColor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=bgColor')]
    public ?string $bgColor = null;

    /**
     * Whether to include a margin around the QR code. Defaults to `false` if not provided.
     *
     * @var ?bool $includeMargin
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeMargin')]
    public ?bool $includeMargin = null;

    /**
     * @param  ?string  $url
     * @param  ?float  $size
     * @param  ?Level  $level
     * @param  ?string  $fgColor
     * @param  ?string  $bgColor
     * @param  ?bool  $includeMargin
     */
    public function __construct(?string $url = null, ?float $size = null, ?Level $level = null, ?string $fgColor = null, ?string $bgColor = null, ?bool $includeMargin = null)
    {
        $this->url = $url;
        $this->size = $size;
        $this->level = $level;
        $this->fgColor = $fgColor;
        $this->bgColor = $bgColor;
        $this->includeMargin = $includeMargin;
    }
}