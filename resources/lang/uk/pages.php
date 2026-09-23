<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Налаштування Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Налаштування проєкту',
            'description' => 'Налаштуйте підключення до вашого проєкту Amplitude.',
        ],
        'tracking_debug' => [
            'heading' => 'Відстеження та налагодження',
            'description' => 'Керуйте поведінкою відстеження, конфіденційністю та журналом налагодження.',
        ],
        'storage_cookies' => [
            'heading' => 'Сховище та cookie',
            'description' => 'Налаштуйте, де зберігається ідентичність користувача, і параметри cookie.',
        ],
        'advanced' => [
            'heading' => 'Додатково',
            'description' => 'Точне налаштування пакетного надсилання подій і перевірки ідентифікаторів.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API-ключ',
            'helper' => 'API-ключ вашого проєкту Amplitude. Залиште порожнім, щоб вимкнути відстеження.',
        ],
        'server_zone' => [
            'label' => 'Зона сервера',
            'helper' => 'Регіон зберігання даних вашого проєкту Amplitude.',
            'options' => [
                'US' => 'США',
                'EU' => 'Європейський Союз',
            ],
        ],
        'server_url' => [
            'label' => 'URL сервера',
            'helper' => 'Користувацький ендпоінт для проксі. Якщо задано, замінює зону сервера.',
        ],
        'custom_lib_url' => [
            'label' => 'URL користувацької бібліотеки',
            'helper' => 'Користувацький URL скрипту Amplitude Browser SDK (для роботи через проксі).',
        ],
        'autocapture' => [
            'label' => 'Автозахоплення',
            'helper' => 'Автоматично фіксувати перегляди сторінок, сесії, взаємодію з формами та завантаження файлів.',
        ],
        'debug' => [
            'label' => 'Режим налагодження',
            'helper' => 'Увімкнути журнал налагодження в консолі браузера.',
        ],
        'opt_out' => [
            'label' => 'Відмова від відстеження',
            'helper' => 'Припинити надсилання подій до Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Тайм-аут сесії (хвилини)',
            'helper' => 'Хвилини бездіяльності до початку нової сесії.',
        ],
        'identity_storage' => [
            'label' => 'Зберігання ідентичності',
            'helper' => 'Де зберігаються ідентифікатори користувача та пристрою.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Немає',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Домен cookie',
            'helper' => 'Домен cookie Amplitude (наприклад, .example.com для спільного доступу між піддоменами).',
        ],
        'cookie_expiration' => [
            'label' => 'Термін дії cookie (дні)',
            'helper' => 'Кількість днів до закінчення терміну дії cookie Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'Захищений cookie',
            'helper' => 'Передавати cookie лише через HTTPS.',
        ],
        'min_id_length' => [
            'label' => 'Мінімальна довжина ID',
            'helper' => 'Мінімальна довжина ідентифікаторів користувача та пристрою. Залиште порожнім, щоб використати значення Amplitude за замовчуванням.',
        ],
        'flush_queue_size' => [
            'label' => 'Розмір черги надсилання',
            'helper' => 'Кількість подій, що збираються в пакет перед надсиланням до Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'Інтервал надсилання (мс)',
            'helper' => 'Максимальний час очікування в мілісекундах перед надсиланням пакета подій.',
        ],
    ],
];
