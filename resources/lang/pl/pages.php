<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Ustawienia Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Konfiguracja projektu',
            'description' => 'Skonfiguruj połączenie z projektem Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Śledzenie i debugowanie',
            'description' => 'Kontroluj zachowanie śledzenia, prywatność i logowanie debugowania.',
        ],
        'storage_cookies' => [
            'heading' => 'Przechowywanie i pliki cookie',
            'description' => 'Skonfiguruj miejsce przechowywania tożsamości użytkownika i ustawienia plików cookie.',
        ],
        'advanced' => [
            'heading' => 'Zaawansowane',
            'description' => 'Dostosuj grupowanie zdarzeń i walidację identyfikatorów.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Klucz API',
            'helper' => 'Klucz API projektu Amplitude. Pozostaw puste, aby wyłączyć śledzenie.',
        ],
        'server_zone' => [
            'label' => 'Strefa serwera',
            'helper' => 'Region przechowywania danych projektu Amplitude.',
            'options' => [
                'US' => 'Stany Zjednoczone',
                'EU' => 'Unia Europejska',
            ],
        ],
        'server_url' => [
            'label' => 'URL serwera',
            'helper' => 'Niestandardowy punkt końcowy dla proxy. Po ustawieniu zastępuje strefę serwera.',
        ],
        'custom_lib_url' => [
            'label' => 'Niestandardowy URL biblioteki',
            'helper' => 'Niestandardowy adres URL skryptu Amplitude Browser SDK (dla konfiguracji z proxy).',
        ],
        'autocapture' => [
            'label' => 'Automatyczne przechwytywanie',
            'helper' => 'Automatycznie przechwytuj odsłony, sesje, interakcje z formularzami i pobrania plików.',
        ],
        'debug' => [
            'label' => 'Tryb debugowania',
            'helper' => 'Włącz logowanie debugowania w konsoli przeglądarki.',
        ],
        'opt_out' => [
            'label' => 'Rezygnacja',
            'helper' => 'Zatrzymaj wysyłanie zdarzeń do Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Limit czasu sesji (minuty)',
            'helper' => 'Minuty bezczynności przed rozpoczęciem nowej sesji.',
        ],
        'identity_storage' => [
            'label' => 'Przechowywanie tożsamości',
            'helper' => 'Gdzie przechowywane są identyfikatory użytkownika i urządzenia.',
            'options' => [
                'cookie' => 'Plik cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Brak',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Domena pliku cookie',
            'helper' => 'Domena pliku cookie Amplitude (np. .example.com, aby współdzielić go między subdomenami).',
        ],
        'cookie_expiration' => [
            'label' => 'Wygaśnięcie pliku cookie (dni)',
            'helper' => 'Liczba dni do wygaśnięcia pliku cookie Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Bezpieczny plik cookie',
            'helper' => 'Przesyłaj pliki cookie tylko przez HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Minimalna długość ID',
            'helper' => 'Minimalna długość identyfikatorów użytkownika i urządzenia. Pozostaw puste, aby użyć domyślnej wartości Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Rozmiar kolejki wysyłki',
            'helper' => 'Liczba zdarzeń grupowanych przed wysłaniem do Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Interwał wysyłki (ms)',
            'helper' => 'Maksymalny czas oczekiwania w milisekundach przed wysłaniem zgrupowanych zdarzeń.',
        ],
    ],
];
