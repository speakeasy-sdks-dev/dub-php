<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Components\Security $security = null;

    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '0.0.1';

    public string $sdkVersion = '0.4.2';

    public string $genVersion = '2.415.4';

    public string $userAgent = 'speakeasy-sdk/php 0.4.2 2.415.4 0.0.1 dub/dub-php';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        return Dub::SERVERS[$this->serverIndex];
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Components\Security(
                token: $this->securitySource->call($this)
            );

            return $security;
        } else {
            return $this->security;
        }
    }
}