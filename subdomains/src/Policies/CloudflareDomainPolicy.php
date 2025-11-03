<?php

namespace Boy132\Subdomains\Policies;

use App\Policies\DefaultPolicies;

class CloudflareDomainPolicy
{
    use DefaultPolicies;

    protected string $modelName = 'cloudflare_domain';
}
