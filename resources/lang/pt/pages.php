<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Definições do Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuração do projeto',
            'description' => 'Configure a ligação ao seu projeto Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Rastreamento e depuração',
            'description' => 'Controle o comportamento do rastreamento, a privacidade e os registos de depuração.',
        ],
        'storage_cookies' => [
            'heading' => 'Armazenamento e cookies',
            'description' => 'Configure onde a identidade do utilizador é guardada e as definições de cookies.',
        ],
        'advanced' => [
            'heading' => 'Avançado',
            'description' => 'Ajuste o agrupamento de eventos e a validação de identificadores.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chave de API',
            'helper' => 'A chave de API do seu projeto Amplitude. Deixe vazio para desativar o rastreamento.',
        ],
        'server_zone' => [
            'label' => 'Zona do servidor',
            'helper' => 'Região de residência de dados do seu projeto Amplitude.',
            'options' => [
                'US' => 'Estados Unidos',
                'EU' => 'União Europeia',
            ],
        ],
        'server_url' => [
            'label' => 'URL do servidor',
            'helper' => 'Endpoint personalizado para um proxy. Quando definido, substitui a zona do servidor.',
        ],
        'custom_lib_url' => [
            'label' => 'URL de biblioteca personalizada',
            'helper' => 'URL personalizado do script do Amplitude Browser SDK (para configurações com proxy).',
        ],
        'autocapture' => [
            'label' => 'Captura automática',
            'helper' => 'Capturar automaticamente visualizações de página, sessões, interações com formulários e transferências de ficheiros.',
        ],
        'debug' => [
            'label' => 'Modo de depuração',
            'helper' => 'Ativar registos de depuração na consola do navegador.',
        ],
        'opt_out' => [
            'label' => 'Exclusão',
            'helper' => 'Parar o envio de eventos para o Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Tempo limite da sessão (minutos)',
            'helper' => 'Minutos de inatividade antes de iniciar uma nova sessão.',
        ],
        'identity_storage' => [
            'label' => 'Armazenamento da identidade',
            'helper' => 'Onde os identificadores de utilizador e dispositivo são guardados.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Nenhum',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Domínio do cookie',
            'helper' => 'Domínio do cookie do Amplitude (por ex., .example.com para o partilhar entre subdomínios).',
        ],
        'cookie_expiration' => [
            'label' => 'Expiração do cookie (dias)',
            'helper' => 'Número de dias até o cookie do Amplitude expirar.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie seguro',
            'helper' => 'Transmitir cookies apenas via HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Comprimento mínimo do ID',
            'helper' => 'Comprimento mínimo dos IDs de utilizador e dispositivo. Deixe vazio para usar o valor predefinido do Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Tamanho da fila de envio',
            'helper' => 'Número de eventos agrupados antes de serem enviados para o Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Intervalo de envio (ms)',
            'helper' => 'Tempo máximo de espera em milissegundos antes de enviar os eventos agrupados.',
        ],
    ],
];
