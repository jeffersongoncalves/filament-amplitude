## Filament Amplitude

Filament plugin for Amplitude analytics with a settings page powered by Spatie Laravel Settings. Manage the Amplitude Browser SDK configuration from the Filament admin panel; the SDK is injected into `<head>` of every panel page.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-amplitude:"^1.0"
php artisan vendor:publish --tag=amplitude-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Amplitude\AmplitudePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            AmplitudePlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page" lang="php">
AmplitudePlugin::make()->settingsPage(false)
</code-snippet>
@endverbatim

### Architecture
- `AmplitudePlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageAmplitudeSettings`
- `AmplitudeServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `amplitude::script` view (from `jeffersongoncalves/laravel-amplitude`) at `PanelsRenderHook::HEAD_START`
- `ManageAmplitudeSettings` extends `Filament\Pages\SettingsPage` bound to `JeffersonGoncalves\Amplitude\Settings\AmplitudeSettings`
- Translations live under `filament-amplitude::pages.*`

### Best Practices
- Publish and run the settings migrations before opening the settings page
- The SDK only renders when `api_key` is set, so leaving it empty disables tracking
- `server_url` overrides `server_zone`; use it only for proxies
