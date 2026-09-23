<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Настройки Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Настройка проекта',
            'description' => 'Настройте подключение к вашему проекту Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Отслеживание и отладка',
            'description' => 'Управляйте поведением отслеживания, конфиденциальностью и журналом отладки.',
        ],
        'storage_cookies' => [
            'heading' => 'Хранилище и cookie',
            'description' => 'Настройте, где хранится идентичность пользователя, и параметры cookie.',
        ],
        'advanced' => [
            'heading' => 'Дополнительно',
            'description' => 'Тонкая настройка пакетной отправки событий и проверки идентификаторов.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-ключ',
            'helper' => 'API-ключ вашего проекта Amplitude. Оставьте пустым, чтобы отключить отслеживание.',
        ],
        'server_zone' => [
            'label' => 'Зона сервера',
            'helper' => 'Регион хранения данных вашего проекта Amplitude.',
            'options' => [
                'US' => 'США',
                'EU' => 'Европейский союз',
            ],
        ],
        'server_url' => [
            'label' => 'URL сервера',
            'helper' => 'Пользовательский эндпоинт для прокси. Если задан, заменяет зону сервера.',
        ],
        'custom_lib_url' => [
            'label' => 'URL пользовательской библиотеки',
            'helper' => 'Пользовательский URL скрипта Amplitude Browser SDK (для работы через прокси).',
        ],
        'autocapture' => [
            'label' => 'Автозахват',
            'helper' => 'Автоматически фиксировать просмотры страниц, сессии, работу с формами и загрузки файлов.',
        ],
        'debug' => [
            'label' => 'Режим отладки',
            'helper' => 'Включить журнал отладки в консоли браузера.',
        ],
        'opt_out' => [
            'label' => 'Отказ от отслеживания',
            'helper' => 'Прекратить отправку событий в Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Тайм-аут сессии (минуты)',
            'helper' => 'Минуты бездействия до начала новой сессии.',
        ],
        'identity_storage' => [
            'label' => 'Хранение идентичности',
            'helper' => 'Где сохраняются идентификаторы пользователя и устройства.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Нет',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Домен cookie',
            'helper' => 'Домен cookie Amplitude (например, .example.com для общего доступа между поддоменами).',
        ],
        'cookie_expiration' => [
            'label' => 'Срок действия cookie (дни)',
            'helper' => 'Количество дней до истечения срока действия cookie Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Защищённый cookie',
            'helper' => 'Передавать cookie только по HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Минимальная длина ID',
            'helper' => 'Минимальная длина идентификаторов пользователя и устройства. Оставьте пустым, чтобы использовать значение Amplitude по умолчанию.',
        ],
        'flush_queue_size' => [
            'label' => 'Размер очереди отправки',
            'helper' => 'Количество событий, собираемых в пакет перед отправкой в Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Интервал отправки (мс)',
            'helper' => 'Максимальное время ожидания в миллисекундах перед отправкой пакета событий.',
        ],
    ],
];
