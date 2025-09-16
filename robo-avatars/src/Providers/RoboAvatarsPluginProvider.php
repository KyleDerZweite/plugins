<?php

namespace Boy132\RoboAvatars\Providers;

use App\Extensions\Avatar\AvatarService;
use Boy132\RoboAvatars\RoboAvatarsSchema;
use Illuminate\Support\ServiceProvider;

class RoboAvatarsPluginProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        app(AvatarService::class)->register(new RoboAvatarsSchema());
    }
}
