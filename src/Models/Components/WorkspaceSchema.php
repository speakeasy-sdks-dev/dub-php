<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class WorkspaceSchema
{
    /**
     * The unique ID of the workspace.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The name of the workspace.
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The slug of the workspace.
     *
     * @var string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * The logo of the workspace.
     *
     * @var ?string $logo
     */
    #[\JMS\Serializer\Annotation\SerializedName('logo')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $logo = null;

    /**
     * The plan of the workspace.
     *
     * @var Plan $plan
     */
    #[\JMS\Serializer\Annotation\SerializedName('plan')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Components\Plan')]
    public Plan $plan;

    /**
     * The Stripe ID of the workspace.
     *
     * @var ?string $stripeId
     */
    #[\JMS\Serializer\Annotation\SerializedName('stripeId')]
    public ?string $stripeId;

    /**
     * The date and time when the billing cycle starts for the workspace.
     *
     * @var float $billingCycleStart
     */
    #[\JMS\Serializer\Annotation\SerializedName('billingCycleStart')]
    public float $billingCycleStart;

    /**
     * [BETA]: The Stripe Connect ID of the workspace.
     *
     * @var ?string $stripeConnectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('stripeConnectId')]
    public ?string $stripeConnectId;

    /**
     * The invite code of the workspace.
     *
     * @var ?string $inviteCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('inviteCode')]
    public ?string $inviteCode;

    /**
     * The usage of the workspace.
     *
     * @var float $usage
     */
    #[\JMS\Serializer\Annotation\SerializedName('usage')]
    public float $usage;

    /**
     * The usage limit of the workspace.
     *
     * @var float $usageLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('usageLimit')]
    public float $usageLimit;

    /**
     * The links usage of the workspace.
     *
     * @var float $linksUsage
     */
    #[\JMS\Serializer\Annotation\SerializedName('linksUsage')]
    public float $linksUsage;

    /**
     * The links limit of the workspace.
     *
     * @var float $linksLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('linksLimit')]
    public float $linksLimit;

    /**
     * The dollar amount of tracked revenue in the current billing cycle (in cents).
     *
     * @var float $salesUsage
     */
    #[\JMS\Serializer\Annotation\SerializedName('salesUsage')]
    public float $salesUsage;

    /**
     * The limit of tracked revenue in the current billing cycle (in cents).
     *
     * @var float $salesLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('salesLimit')]
    public float $salesLimit;

    /**
     * The domains limit of the workspace.
     *
     * @var float $domainsLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('domainsLimit')]
    public float $domainsLimit;

    /**
     * The tags limit of the workspace.
     *
     * @var float $tagsLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('tagsLimit')]
    public float $tagsLimit;

    /**
     * The users limit of the workspace.
     *
     * @var float $usersLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('usersLimit')]
    public float $usersLimit;

    /**
     * The AI usage of the workspace.
     *
     * @var float $aiUsage
     */
    #[\JMS\Serializer\Annotation\SerializedName('aiUsage')]
    public float $aiUsage;

    /**
     * The AI limit of the workspace.
     *
     * @var float $aiLimit
     */
    #[\JMS\Serializer\Annotation\SerializedName('aiLimit')]
    public float $aiLimit;

    /**
     * The ID of the referral link of the workspace.
     *
     * @var ?string $referralLinkId
     */
    #[\JMS\Serializer\Annotation\SerializedName('referralLinkId')]
    public ?string $referralLinkId;

    /**
     * Whether the workspace has conversion tracking enabled (d.to/conversions).
     *
     * @var bool $conversionEnabled
     */
    #[\JMS\Serializer\Annotation\SerializedName('conversionEnabled')]
    public bool $conversionEnabled;

    /**
     * Whether the workspace has claimed a free .link domain. (dub.link/free)
     *
     * @var bool $dotLinkClaimed
     */
    #[\JMS\Serializer\Annotation\SerializedName('dotLinkClaimed')]
    public bool $dotLinkClaimed;

    /**
     * The date and time when the workspace was created.
     *
     * @var string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The role of the authenticated user in the workspace.
     *
     * @var array<Users> $users
     */
    #[\JMS\Serializer\Annotation\SerializedName('users')]
    #[\JMS\Serializer\Annotation\Type('array<\Dub\Models\Components\Users>')]
    public array $users;

    /**
     * The domains of the workspace.
     *
     * @var array<Domains> $domains
     */
    #[\JMS\Serializer\Annotation\SerializedName('domains')]
    #[\JMS\Serializer\Annotation\Type('array<\Dub\Models\Components\Domains>')]
    public array $domains;

    /**
     * The feature flags of the workspace, indicating which features are enabled.
     *
     * @var ?array<string, bool> $flags
     */
    #[\JMS\Serializer\Annotation\SerializedName('flags')]
    #[\JMS\Serializer\Annotation\Type('array<string, bool>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $flags = null;

    /**
     * The publishable key of the workspace.
     *
     * @var ?string $publishableKey
     */
    #[\JMS\Serializer\Annotation\SerializedName('publishableKey')]
    public ?string $publishableKey;

    /**
     * @param  string  $id
     * @param  string  $name
     * @param  string  $slug
     * @param  Plan  $plan
     * @param  float  $billingCycleStart
     * @param  float  $usage
     * @param  float  $usageLimit
     * @param  float  $linksUsage
     * @param  float  $linksLimit
     * @param  float  $salesUsage
     * @param  float  $salesLimit
     * @param  float  $domainsLimit
     * @param  float  $tagsLimit
     * @param  float  $usersLimit
     * @param  float  $aiUsage
     * @param  float  $aiLimit
     * @param  bool  $conversionEnabled
     * @param  bool  $dotLinkClaimed
     * @param  string  $createdAt
     * @param  array<Users>  $users
     * @param  array<Domains>  $domains
     * @param  ?string  $stripeId
     * @param  ?string  $stripeConnectId
     * @param  ?string  $inviteCode
     * @param  ?string  $referralLinkId
     * @param  ?array<string, bool>  $flags
     * @param  ?string  $publishableKey
     * @param  ?string  $logo
     */
    public function __construct(string $id, string $name, string $slug, Plan $plan, float $billingCycleStart, float $usage, float $usageLimit, float $linksUsage, float $linksLimit, float $salesUsage, float $salesLimit, float $domainsLimit, float $tagsLimit, float $usersLimit, float $aiUsage, float $aiLimit, bool $conversionEnabled, bool $dotLinkClaimed, string $createdAt, array $users, array $domains, ?string $stripeId = null, ?string $stripeConnectId = null, ?string $inviteCode = null, ?string $referralLinkId = null, ?array $flags = null, ?string $publishableKey = null, ?string $logo = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->plan = $plan;
        $this->billingCycleStart = $billingCycleStart;
        $this->usage = $usage;
        $this->usageLimit = $usageLimit;
        $this->linksUsage = $linksUsage;
        $this->linksLimit = $linksLimit;
        $this->salesUsage = $salesUsage;
        $this->salesLimit = $salesLimit;
        $this->domainsLimit = $domainsLimit;
        $this->tagsLimit = $tagsLimit;
        $this->usersLimit = $usersLimit;
        $this->aiUsage = $aiUsage;
        $this->aiLimit = $aiLimit;
        $this->conversionEnabled = $conversionEnabled;
        $this->dotLinkClaimed = $dotLinkClaimed;
        $this->createdAt = $createdAt;
        $this->users = $users;
        $this->domains = $domains;
        $this->stripeId = $stripeId;
        $this->stripeConnectId = $stripeConnectId;
        $this->inviteCode = $inviteCode;
        $this->referralLinkId = $referralLinkId;
        $this->flags = $flags;
        $this->publishableKey = $publishableKey;
        $this->logo = $logo;
    }
}