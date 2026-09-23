<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Configuración de Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuración del proyecto',
            'description' => 'Configura la conexión con tu proyecto de Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Seguimiento y depuración',
            'description' => 'Controla el comportamiento del seguimiento, la privacidad y los registros de depuración.',
        ],
        'storage_cookies' => [
            'heading' => 'Almacenamiento y cookies',
            'description' => 'Configura dónde se guarda la identidad del usuario y las opciones de cookies.',
        ],
        'advanced' => [
            'heading' => 'Avanzado',
            'description' => 'Ajusta el envío por lotes de eventos y la validación de identificadores.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Clave de API',
            'helper' => 'La clave de API de tu proyecto de Amplitude. Déjala vacía para desactivar el seguimiento.',
        ],
        'server_zone' => [
            'label' => 'Zona del servidor',
            'helper' => 'Región de residencia de datos de tu proyecto de Amplitude.',
            'options' => [
                'US' => 'Estados Unidos',
                'EU' => 'Unión Europea',
            ],
        ],
        'server_url' => [
            'label' => 'URL del servidor',
            'helper' => 'Endpoint personalizado para un proxy. Si se define, reemplaza la zona del servidor.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de librería personalizada',
            'helper' => 'URL personalizada del script de Amplitude Browser SDK (para configuraciones con proxy).',
        ],
        'autocapture' => [
            'label' => 'Captura automática',
            'helper' => 'Captura automáticamente vistas de página, sesiones, interacciones con formularios y descargas de archivos.',
        ],
        'debug' => [
            'label' => 'Modo de depuración',
            'helper' => 'Activa los registros de depuración en la consola del navegador.',
        ],
        'opt_out' => [
            'label' => 'Excluirse',
            'helper' => 'Deja de enviar eventos a Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Tiempo de espera de sesión (minutos)',
            'helper' => 'Minutos de inactividad antes de iniciar una nueva sesión.',
        ],
        'identity_storage' => [
            'label' => 'Almacenamiento de identidad',
            'helper' => 'Dónde se guardan los identificadores de usuario y dispositivo.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Ninguno',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Dominio de la cookie',
            'helper' => 'Dominio de la cookie de Amplitude (p. ej., .example.com para compartirla entre subdominios).',
        ],
        'cookie_expiration' => [
            'label' => 'Caducidad de la cookie (días)',
            'helper' => 'Número de días antes de que caduque la cookie de Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie segura',
            'helper' => 'Transmite las cookies solo a través de HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Longitud mínima del ID',
            'helper' => 'Longitud mínima de los IDs de usuario y dispositivo. Déjalo vacío para usar el valor predeterminado de Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Tamaño de la cola de envío',
            'helper' => 'Número de eventos agrupados antes de enviarlos a Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Intervalo de envío (ms)',
            'helper' => 'Tiempo máximo en milisegundos de espera antes de enviar los eventos agrupados.',
        ],
    ],
];
