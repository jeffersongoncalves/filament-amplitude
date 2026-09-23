---
name: filament-amplitude-development
description: Build and work with the Filament Amplitude plugin — Amplitude Browser SDK settings page, head script injection and SDK configuration in Filament panels.
---

# Filament Amplitude Development

## When to use this skill

Use this skill when:
- Adding or changing the Amplitude integration of a Filament panel
- Customizing the Amplitude settings page
- Debugging a missing or misconfigured Amplitude Browser SDK in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-amplitude` (branch `1.x` for Filament 3.x)
- **Namespace**: `JeffersonGoncalves\Filament\Amplitude`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-amplitude:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\Amplitude\AmplitudeServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\Amplitude\AmplitudePlugin;

$panel->plugins([
    AmplitudePlugin::make(),                        // settings page + SDK injection
    // AmplitudePlugin::make()->settingsPage(false), // SDK injection only
]);
```

```bash
php artisan vendor:publish --tag=amplitude-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Type | Description |
|-------|------|-------------|
| `api_key` | TextInput | Project API key; empty disables tracking |
| `server_zone` | Select (US/EU) | Data residency region |
| `server_url` | TextInput (url) | Proxy endpoint; overrides `server_zone` |
| `custom_lib_url` | TextInput (url) | Custom SDK script URL |
| `autocapture` | Toggle | Page views, sessions, forms, downloads |
| `debug` | Toggle | Debug log level |
| `opt_out` | Toggle | Stop sending events |
| `session_timeout_minutes` | TextInput (integer) | Inactivity before a new session |
| `identity_storage` | Select | cookie / localStorage / sessionStorage / none |
| `cookie_domain`, `cookie_expiration`, `secure_cookie` | Cookie options |  |
| `min_id_length`, `flush_queue_size`, `flush_interval_millis` | Advanced batching / validation |  |

## Troubleshooting

- **SDK missing**: check `api_key` is saved and `AmplitudeServiceProvider` is discovered; the `amplitude::script` view comes from `laravel-amplitude`.
- **Settings page errors**: the `amplitude` settings group is missing — publish and run the migrations.
