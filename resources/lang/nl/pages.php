<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics-instellingen',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Projectconfiguratie',
            'description' => 'Configureer de verbinding met je Amplitude-project.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & debug',
            'description' => 'Beheer trackinggedrag, privacy en debuglogging.',
        ],
        'storage_cookies' => [
            'heading' => 'Opslag & cookies',
            'description' => 'Configureer waar de gebruikersidentiteit wordt opgeslagen en de cookie-instellingen.',
        ],
        'advanced' => [
            'heading' => 'Geavanceerd',
            'description' => 'Stem het bundelen van events en de validatie van ID\'s af.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-sleutel',
            'helper' => 'De API-sleutel van je Amplitude-project. Laat leeg om tracking uit te schakelen.',
        ],
        'server_zone' => [
            'label' => 'Serverzone',
            'helper' => 'Regio voor dataresidentie van je Amplitude-project.',
            'options' => [
                'US' => 'Verenigde Staten',
                'EU' => 'Europese Unie',
            ],
        ],
        'server_url' => [
            'label' => 'Server-URL',
            'helper' => 'Aangepast endpoint voor een proxy. Overschrijft de serverzone wanneer ingesteld.',
        ],
        'custom_lib_url' => [
            'label' => 'Aangepaste bibliotheek-URL',
            'helper' => 'Aangepaste URL voor het script van de Amplitude Browser SDK (voor proxyconfiguraties).',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Paginaweergaven, sessies, formulierinteracties en bestandsdownloads automatisch vastleggen.',
        ],
        'debug' => [
            'label' => 'Debugmodus',
            'helper' => 'Debuglogging in de browserconsole inschakelen.',
        ],
        'opt_out' => [
            'label' => 'Afmelden',
            'helper' => 'Stop met het verzenden van events naar Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Sessietime-out (minuten)',
            'helper' => 'Minuten inactiviteit voordat een nieuwe sessie start.',
        ],
        'identity_storage' => [
            'label' => 'Identiteitsopslag',
            'helper' => 'Waar gebruikers- en apparaat-ID\'s worden bewaard.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Geen',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookiedomein',
            'helper' => 'Domein voor de Amplitude-cookie (bijv. .example.com om hem over subdomeinen te delen).',
        ],
        'cookie_expiration' => [
            'label' => 'Cookieverval (dagen)',
            'helper' => 'Aantal dagen voordat de Amplitude-cookie verloopt.',
        ],
        'secure_cookie' => [
            'label' => 'Beveiligde cookie',
            'helper' => 'Cookies alleen via HTTPS verzenden.',
        ],
        'min_id_length' => [
            'label' => 'Minimale ID-lengte',
            'helper' => 'Minimale lengte voor gebruikers- en apparaat-ID\'s. Laat leeg om de standaard van Amplitude te gebruiken.',
        ],
        'flush_queue_size' => [
            'label' => 'Grootte verzendwachtrij',
            'helper' => 'Aantal events dat wordt gebundeld voordat ze naar Amplitude worden verzonden.',
        ],
        'flush_interval_millis' => [
            'label' => 'Verzendinterval (ms)',
            'helper' => 'Maximale wachttijd in milliseconden voordat gebundelde events worden verzonden.',
        ],
    ],
];
