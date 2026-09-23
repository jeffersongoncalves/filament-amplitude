<?php

namespace JeffersonGoncalves\Filament\Amplitude\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Amplitude\Settings\AmplitudeSettings;

class ManageAmplitudeSettings extends SettingsPage
{
    protected static string $settings = AmplitudeSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): ?string
    {
        return __('filament-amplitude::pages.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-amplitude::pages.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-amplitude::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-amplitude::pages.sections.project_configuration.heading'))
                    ->description(__('filament-amplitude::pages.sections.project_configuration.description'))
                    ->schema([
                        TextInput::make('api_key')
                            ->label(__('filament-amplitude::pages.fields.api_key.label'))
                            ->helperText(__('filament-amplitude::pages.fields.api_key.helper'))
                            ->nullable(),

                        Select::make('server_zone')
                            ->label(__('filament-amplitude::pages.fields.server_zone.label'))
                            ->helperText(__('filament-amplitude::pages.fields.server_zone.helper'))
                            ->options([
                                'US' => __('filament-amplitude::pages.fields.server_zone.options.US'),
                                'EU' => __('filament-amplitude::pages.fields.server_zone.options.EU'),
                            ])
                            ->required(),

                        TextInput::make('server_url')
                            ->label(__('filament-amplitude::pages.fields.server_url.label'))
                            ->helperText(__('filament-amplitude::pages.fields.server_url.helper'))
                            ->url()
                            ->nullable(),

                        TextInput::make('custom_lib_url')
                            ->label(__('filament-amplitude::pages.fields.custom_lib_url.label'))
                            ->helperText(__('filament-amplitude::pages.fields.custom_lib_url.helper'))
                            ->url()
                            ->nullable(),
                    ])->columns(2),

                Section::make(__('filament-amplitude::pages.sections.tracking_debug.heading'))
                    ->description(__('filament-amplitude::pages.sections.tracking_debug.description'))
                    ->schema([
                        Toggle::make('autocapture')
                            ->label(__('filament-amplitude::pages.fields.autocapture.label'))
                            ->helperText(__('filament-amplitude::pages.fields.autocapture.helper')),

                        Toggle::make('debug')
                            ->label(__('filament-amplitude::pages.fields.debug.label'))
                            ->helperText(__('filament-amplitude::pages.fields.debug.helper')),

                        Toggle::make('opt_out')
                            ->label(__('filament-amplitude::pages.fields.opt_out.label'))
                            ->helperText(__('filament-amplitude::pages.fields.opt_out.helper')),

                        TextInput::make('session_timeout_minutes')
                            ->label(__('filament-amplitude::pages.fields.session_timeout_minutes.label'))
                            ->helperText(__('filament-amplitude::pages.fields.session_timeout_minutes.helper'))
                            ->integer()
                            ->minValue(1)
                            ->required(),
                    ])->columns(2),

                Section::make(__('filament-amplitude::pages.sections.storage_cookies.heading'))
                    ->description(__('filament-amplitude::pages.sections.storage_cookies.description'))
                    ->schema([
                        Select::make('identity_storage')
                            ->label(__('filament-amplitude::pages.fields.identity_storage.label'))
                            ->helperText(__('filament-amplitude::pages.fields.identity_storage.helper'))
                            ->options([
                                'cookie' => __('filament-amplitude::pages.fields.identity_storage.options.cookie'),
                                'localStorage' => __('filament-amplitude::pages.fields.identity_storage.options.localStorage'),
                                'sessionStorage' => __('filament-amplitude::pages.fields.identity_storage.options.sessionStorage'),
                                'none' => __('filament-amplitude::pages.fields.identity_storage.options.none'),
                            ])
                            ->required(),

                        TextInput::make('cookie_domain')
                            ->label(__('filament-amplitude::pages.fields.cookie_domain.label'))
                            ->helperText(__('filament-amplitude::pages.fields.cookie_domain.helper'))
                            ->nullable(),

                        TextInput::make('cookie_expiration')
                            ->label(__('filament-amplitude::pages.fields.cookie_expiration.label'))
                            ->helperText(__('filament-amplitude::pages.fields.cookie_expiration.helper'))
                            ->integer()
                            ->minValue(0)
                            ->required(),

                        Toggle::make('secure_cookie')
                            ->label(__('filament-amplitude::pages.fields.secure_cookie.label'))
                            ->helperText(__('filament-amplitude::pages.fields.secure_cookie.helper')),
                    ])->columns(2),

                Section::make(__('filament-amplitude::pages.sections.advanced.heading'))
                    ->description(__('filament-amplitude::pages.sections.advanced.description'))
                    ->collapsed()
                    ->schema([
                        TextInput::make('min_id_length')
                            ->label(__('filament-amplitude::pages.fields.min_id_length.label'))
                            ->helperText(__('filament-amplitude::pages.fields.min_id_length.helper'))
                            ->integer()
                            ->minValue(1)
                            ->nullable(),

                        TextInput::make('flush_queue_size')
                            ->label(__('filament-amplitude::pages.fields.flush_queue_size.label'))
                            ->helperText(__('filament-amplitude::pages.fields.flush_queue_size.helper'))
                            ->integer()
                            ->minValue(1)
                            ->required(),

                        TextInput::make('flush_interval_millis')
                            ->label(__('filament-amplitude::pages.fields.flush_interval_millis.label'))
                            ->helperText(__('filament-amplitude::pages.fields.flush_interval_millis.helper'))
                            ->integer()
                            ->minValue(0)
                            ->required(),
                    ])->columns(2),
            ]);
    }
}
