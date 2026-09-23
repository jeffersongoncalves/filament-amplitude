<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics-Einstellungen',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Projektkonfiguration',
            'description' => 'Konfigurieren Sie die Verbindung zu Ihrem Amplitude-Projekt.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & Debugging',
            'description' => 'Steuern Sie Tracking-Verhalten, Datenschutz und Debug-Protokollierung.',
        ],
        'storage_cookies' => [
            'heading' => 'Speicher & Cookies',
            'description' => 'Legen Sie fest, wo die Benutzeridentität gespeichert wird, und konfigurieren Sie Cookies.',
        ],
        'advanced' => [
            'heading' => 'Erweitert',
            'description' => 'Feinabstimmung der Event-Bündelung und der ID-Validierung.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-Schlüssel',
            'helper' => 'Der API-Schlüssel Ihres Amplitude-Projekts. Leer lassen, um das Tracking zu deaktivieren.',
        ],
        'server_zone' => [
            'label' => 'Serverzone',
            'helper' => 'Datenresidenz-Region Ihres Amplitude-Projekts.',
            'options' => [
                'US' => 'Vereinigte Staaten',
                'EU' => 'Europäische Union',
            ],
        ],
        'server_url' => [
            'label' => 'Server-URL',
            'helper' => 'Benutzerdefinierter Endpunkt für einen Proxy. Überschreibt die Serverzone, wenn gesetzt.',
        ],
        'custom_lib_url' => [
            'label' => 'Benutzerdefinierte Bibliotheks-URL',
            'helper' => 'Benutzerdefinierte URL für das Skript des Amplitude Browser SDK (für Proxy-Setups).',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Seitenaufrufe, Sitzungen, Formularinteraktionen und Dateidownloads automatisch erfassen.',
        ],
        'debug' => [
            'label' => 'Debug-Modus',
            'helper' => 'Debug-Protokollierung in der Browserkonsole aktivieren.',
        ],
        'opt_out' => [
            'label' => 'Opt-out',
            'helper' => 'Das Senden von Events an Amplitude stoppen.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Sitzungs-Timeout (Minuten)',
            'helper' => 'Minuten Inaktivität, bevor eine neue Sitzung beginnt.',
        ],
        'identity_storage' => [
            'label' => 'Identitätsspeicher',
            'helper' => 'Wo Benutzer- und Geräte-IDs gespeichert werden.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Keiner',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookie-Domain',
            'helper' => 'Domain für das Amplitude-Cookie (z. B. .example.com, um es über Subdomains zu teilen).',
        ],
        'cookie_expiration' => [
            'label' => 'Cookie-Ablauf (Tage)',
            'helper' => 'Anzahl der Tage, bis das Amplitude-Cookie abläuft.',
        ],
        'secure_cookie' => [
            'label' => 'Sicheres Cookie',
            'helper' => 'Cookies nur über HTTPS übertragen.',
        ],
        'min_id_length' => [
            'label' => 'Minimale ID-Länge',
            'helper' => 'Minimale Länge für Benutzer- und Geräte-IDs. Leer lassen, um den Amplitude-Standard zu verwenden.',
        ],
        'flush_queue_size' => [
            'label' => 'Größe der Sendewarteschlange',
            'helper' => 'Anzahl der Events, die vor dem Senden an Amplitude gebündelt werden.',
        ],
        'flush_interval_millis' => [
            'label' => 'Sendeintervall (ms)',
            'helper' => 'Maximale Wartezeit in Millisekunden, bevor gebündelte Events gesendet werden.',
        ],
    ],
];
