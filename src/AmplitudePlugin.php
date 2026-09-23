<?php

namespace JeffersonGoncalves\Filament\Amplitude;

use JeffersonGoncalves\Filament\Amplitude\Pages\ManageAmplitudeSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class AmplitudePlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-amplitude';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageAmplitudeSettings::class;
    }
}
