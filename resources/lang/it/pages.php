<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Impostazioni di Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configurazione del progetto',
            'description' => 'Configura la connessione al tuo progetto Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracciamento e debug',
            'description' => 'Controlla il comportamento del tracciamento, la privacy e i log di debug.',
        ],
        'storage_cookies' => [
            'heading' => 'Archiviazione e cookie',
            'description' => 'Configura dove viene salvata l\'identità dell\'utente e le impostazioni dei cookie.',
        ],
        'advanced' => [
            'heading' => 'Avanzate',
            'description' => 'Regola il raggruppamento degli eventi e la convalida degli identificativi.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chiave API',
            'helper' => 'La chiave API del tuo progetto Amplitude. Lascia vuoto per disattivare il tracciamento.',
        ],
        'server_zone' => [
            'label' => 'Zona del server',
            'helper' => 'Regione di residenza dei dati del tuo progetto Amplitude.',
            'options' => [
                'US' => 'Stati Uniti',
                'EU' => 'Unione Europea',
            ],
        ],
        'server_url' => [
            'label' => 'URL del server',
            'helper' => 'Endpoint personalizzato per un proxy. Se impostato, sostituisce la zona del server.',
        ],
        'custom_lib_url' => [
            'label' => 'URL libreria personalizzata',
            'helper' => 'URL personalizzato per lo script di Amplitude Browser SDK (per configurazioni con proxy).',
        ],
        'autocapture' => [
            'label' => 'Acquisizione automatica',
            'helper' => 'Acquisisci automaticamente visualizzazioni di pagina, sessioni, interazioni con i moduli e download di file.',
        ],
        'debug' => [
            'label' => 'Modalità debug',
            'helper' => 'Abilita i log di debug nella console del browser.',
        ],
        'opt_out' => [
            'label' => 'Opt-out',
            'helper' => 'Interrompi l\'invio di eventi ad Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Timeout sessione (minuti)',
            'helper' => 'Minuti di inattività prima dell\'inizio di una nuova sessione.',
        ],
        'identity_storage' => [
            'label' => 'Archiviazione identità',
            'helper' => 'Dove vengono salvati gli identificativi di utente e dispositivo.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Nessuno',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Dominio del cookie',
            'helper' => 'Dominio del cookie di Amplitude (ad es. .example.com per condividerlo tra sottodomini).',
        ],
        'cookie_expiration' => [
            'label' => 'Scadenza del cookie (giorni)',
            'helper' => 'Numero di giorni prima della scadenza del cookie di Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie sicuro',
            'helper' => 'Trasmetti i cookie solo tramite HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Lunghezza minima ID',
            'helper' => 'Lunghezza minima degli ID di utente e dispositivo. Lascia vuoto per usare il valore predefinito di Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Dimensione coda di invio',
            'helper' => 'Numero di eventi raggruppati prima dell\'invio ad Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Intervallo di invio (ms)',
            'helper' => 'Tempo massimo di attesa in millisecondi prima di inviare gli eventi raggruppati.',
        ],
    ],
];
