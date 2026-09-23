<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Configurações do Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Configuração do projeto',
            'description' => 'Configure a conexão com o seu projeto no Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Rastreamento e depuração',
            'description' => 'Controle o comportamento do rastreamento, a privacidade e os logs de depuração.',
        ],
        'storage_cookies' => [
            'heading' => 'Armazenamento e cookies',
            'description' => 'Configure onde a identidade do usuário é armazenada e as opções de cookie.',
        ],
        'advanced' => [
            'heading' => 'Avançado',
            'description' => 'Ajuste o envio em lote de eventos e a validação de identificadores.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'Chave de API',
            'helper' => 'A chave de API do seu projeto no Amplitude. Deixe vazio para desativar o rastreamento.',
        ],
        'server_zone' => [
            'label' => 'Zona do servidor',
            'helper' => 'Região de residência de dados do seu projeto no Amplitude.',
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
            'label' => 'URL personalizada da biblioteca',
            'helper' => 'URL personalizada do script do Amplitude Browser SDK (para configurações com proxy).',
        ],
        'autocapture' => [
            'label' => 'Captura automática',
            'helper' => 'Captura automaticamente visualizações de página, sessões, interações com formulários e downloads de arquivos.',
        ],
        'debug' => [
            'label' => 'Modo de depuração',
            'helper' => 'Ativa logs de depuração no console do navegador.',
        ],
        'opt_out' => [
            'label' => 'Desativar envio',
            'helper' => 'Interrompe o envio de eventos para o Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Tempo limite da sessão (minutos)',
            'helper' => 'Minutos de inatividade até iniciar uma nova sessão.',
        ],
        'identity_storage' => [
            'label' => 'Armazenamento de identidade',
            'helper' => 'Onde os identificadores de usuário e dispositivo são persistidos.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Nenhum',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Domínio do cookie',
            'helper' => 'Domínio do cookie do Amplitude (ex.: .example.com para compartilhá-lo entre subdomínios).',
        ],
        'cookie_expiration' => [
            'label' => 'Expiração do cookie (dias)',
            'helper' => 'Número de dias até o cookie do Amplitude expirar.',
        ],
        'secure_cookie' => [
            'label' => 'Cookie seguro',
            'helper' => 'Transmite cookies somente via HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Tamanho mínimo do ID',
            'helper' => 'Tamanho mínimo dos IDs de usuário e dispositivo. Deixe vazio para usar o padrão do Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'Tamanho da fila de envio',
            'helper' => 'Número de eventos agrupados antes de enviá-los ao Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Intervalo de envio (ms)',
            'helper' => 'Tempo máximo, em milissegundos, de espera antes de enviar os eventos agrupados.',
        ],
    ],
];
