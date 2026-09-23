<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics Settings',

    'sections' => [
        'project_configuration' => [
            'heading' => 'Project Configuration',
            'description' => 'Configure the connection to your Amplitude project.',
        ],
        'tracking_debug' => [
            'heading' => 'Tracking & Debug',
            'description' => 'Control tracking behavior, privacy and debug logging.',
        ],
        'storage_cookies' => [
            'heading' => 'Storage & Cookies',
            'description' => 'Configure where user identity is stored and cookie settings.',
        ],
        'advanced' => [
            'heading' => 'Advanced',
            'description' => 'Fine-tune event batching and identifier validation.',
        ],
    ],

    'fields' => [
        'api_key' => [
            'label' => 'API Key',
            'helper' => 'Your Amplitude project API key. Leave empty to disable tracking.',
        ],
        'server_zone' => [
            'label' => 'Server Zone',
            'helper' => 'Data residency region of your Amplitude project.',
            'options' => [
                'US' => 'United States',
                'EU' => 'European Union',
            ],
        ],
        'server_url' => [
            'label' => 'Server URL',
            'helper' => 'Custom endpoint for a proxy. When set, it overrides the server zone.',
        ],
        'custom_lib_url' => [
            'label' => 'Custom Library URL',
            'helper' => 'Custom URL for the Amplitude Browser SDK script (for proxy setups).',
        ],
        'autocapture' => [
            'label' => 'Autocapture',
            'helper' => 'Automatically capture page views, sessions, form interactions and file downloads.',
        ],
        'debug' => [
            'label' => 'Debug Mode',
            'helper' => 'Enable debug logging to the browser console.',
        ],
        'opt_out' => [
            'label' => 'Opt Out',
            'helper' => 'Disable sending events to Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Session Timeout (minutes)',
            'helper' => 'Minutes of inactivity before a new session starts.',
        ],
        'identity_storage' => [
            'label' => 'Identity Storage',
            'helper' => 'Where the user and device identifiers are persisted.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'None',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookie Domain',
            'helper' => 'Domain for the Amplitude cookie (e.g. .example.com to share it across subdomains).',
        ],
        'cookie_expiration' => [
            'label' => 'Cookie Expiration (days)',
            'helper' => 'Number of days before the Amplitude cookie expires.',
        ],
        'secure_cookie' => [
            'label' => 'Secure Cookie',
            'helper' => 'Only transmit cookies over HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Minimum ID Length',
            'helper' => 'Minimum length for user and device IDs. Leave empty to use the Amplitude default.',
        ],
        'flush_queue_size' => [
            'label' => 'Flush Queue Size',
            'helper' => 'Number of events to batch before sending them to Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Flush Interval (ms)',
            'helper' => 'Maximum time in milliseconds to wait before sending batched events.',
        ],
    ],
];
