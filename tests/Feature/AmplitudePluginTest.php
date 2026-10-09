<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Amplitude\Settings\AmplitudeSettings;
use JeffersonGoncalves\Filament\Amplitude\AmplitudePlugin;
use JeffersonGoncalves\Filament\Amplitude\Pages\ManageAmplitudeSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageAmplitudeSettings::class)
        ->and(AmplitudePlugin::make()->getId())->toBe('filament-amplitude');
});

it('ships translated labels', function () {
    expect(ManageAmplitudeSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageAmplitudeSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageAmplitudeSettings::class)
        ->fillForm(['api_key' => 'TESTAPIKEY123'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(AmplitudeSettings::class)->refresh();
    expect($settings->api_key)->toBe('TESTAPIKEY123');
});

it('injects the script into the panel once configured', function () {
    $settings = app(AmplitudeSettings::class);
    $settings->api_key = 'TESTAPIKEY123';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('amplitude.init');
});
