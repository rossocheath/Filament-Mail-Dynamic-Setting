<?php

namespace Rossocheath\FilamentMailDynamicSetting;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentMailDynamicSetting implements Plugin
{
    public function getId(): string
    {
        return 'filament-mail-dynamic-setting';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-mail-dynamic-setting', __DIR__ . '/../resources/dist/filament-mail-dynamic-setting.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filament-mail-dynamic-setting');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
