<?php

namespace Rahmanramsi\LivewirePageGroup\Tests\Fixtures\Pages;

use Rahmanramsi\LivewirePageGroup\Pages\Page;
use Rahmanramsi\LivewirePageGroup\Tests\Fixtures\ProfileRouteMiddleware;

class ProfilePage extends Page
{
    protected static ?string $title = 'Profile Settings';

    protected static string $view = 'livewire-page-group-tests::pages.profile';

    protected static ?string $slug = 'settings/profile';

    protected static string|array $routeMiddleware = ProfileRouteMiddleware::class;
}
