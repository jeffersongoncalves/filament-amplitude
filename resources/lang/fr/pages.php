<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Paramètres d\'Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuration du projet',
            'description' => 'Configurez la connexion à votre projet Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Suivi et débogage',
            'description' => 'Contrôlez le comportement du suivi, la confidentialité et la journalisation de débogage.',
        ],
        'storage_cookies' => [
            'heading' => 'Stockage et cookies',
            'description' => 'Configurez l\'emplacement de l\'identité utilisateur et les options des cookies.',
        ],
        'advanced' => [
            'heading' => 'Avancé',
            'description' => 'Affinez le regroupement des événements et la validation des identifiants.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Clé API',
            'helper' => 'La clé API de votre projet Amplitude. Laissez vide pour désactiver le suivi.',
        ],
        'server_zone' => [
            'label' => 'Zone du serveur',
            'helper' => 'Région de résidence des données de votre projet Amplitude.',
            'options' => [
                'US' => 'États-Unis',
                'EU' => 'Union européenne',
            ],
        ],
        'server_url' => [
            'label' => 'URL du serveur',
            'helper' => 'Point de terminaison personnalisé pour un proxy. S\'il est défini, il remplace la zone du serveur.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de bibliothèque personnalisée',
            'helper' => 'URL personnalisée du script Amplitude Browser SDK (pour les configurations avec proxy).',
        ],
        'autocapture' => [
            'label' => 'Capture automatique',
            'helper' => 'Capturer automatiquement les pages vues, les sessions, les interactions avec les formulaires et les téléchargements.',
        ],
        'debug' => [
            'label' => 'Mode débogage',
            'helper' => 'Activer la journalisation de débogage dans la console du navigateur.',
        ],
        'opt_out' => [
            'label' => 'Désactivation',
            'helper' => 'Arrêter l\'envoi d\'événements à Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Expiration de session (minutes)',
            'helper' => 'Minutes d\'inactivité avant le début d\'une nouvelle session.',
        ],
        'identity_storage' => [
            'label' => 'Stockage de l\'identité',
            'helper' => 'Où les identifiants utilisateur et appareil sont conservés.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Aucun',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Domaine du cookie',
            'helper' => 'Domaine du cookie Amplitude (par ex. .example.com pour le partager entre sous-domaines).',
        ],
        'cookie_expiration' => [
            'label' => 'Expiration du cookie (jours)',
            'helper' => 'Nombre de jours avant l\'expiration du cookie Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie sécurisé',
            'helper' => 'Transmettre les cookies uniquement via HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Longueur minimale des ID',
            'helper' => 'Longueur minimale des ID utilisateur et appareil. Laissez vide pour utiliser la valeur par défaut d\'Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Taille de la file d\'envoi',
            'helper' => 'Nombre d\'événements regroupés avant leur envoi à Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Intervalle d\'envoi (ms)',
            'helper' => 'Délai maximal en millisecondes avant l\'envoi des événements regroupés.',
        ],
    ],
];
