<?php

namespace Boy132\Subdomains\Providers;

use App\Models\Role;
use Illuminate\Support\ServiceProvider;

class SubdomainsPluginProvider extends ServiceProvider
{
    public function register(): void
    {
        Role::registerCustomDefaultPermissions('cloudflare_domain');
    }

    public function boot(): void {}
}
