<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics ayarları',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Proje yapılandırması',
            'description' => 'Amplitude projenize bağlantıyı yapılandırın.',
        ],
        'tracking_debug' => [
            'heading' => 'İzleme ve hata ayıklama',
            'description' => 'İzleme davranışını, gizliliği ve hata ayıklama günlüğünü kontrol edin.',
        ],
        'storage_cookies' => [
            'heading' => 'Depolama ve çerezler',
            'description' => 'Kullanıcı kimliğinin nerede saklanacağını ve çerez ayarlarını yapılandırın.',
        ],
        'advanced' => [
            'heading' => 'Gelişmiş',
            'description' => 'Olayların toplu gönderimini ve kimlik doğrulamasını ince ayarlayın.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API anahtarı',
            'helper' => 'Amplitude projenizin API anahtarı. İzlemeyi devre dışı bırakmak için boş bırakın.',
        ],
        'server_zone' => [
            'label' => 'Sunucu bölgesi',
            'helper' => 'Amplitude projenizin veri yerleşim bölgesi.',
            'options' => [
                'US' => 'Amerika Birleşik Devletleri',
                'EU' => 'Avrupa Birliği',
            ],
        ],
        'server_url' => [
            'label' => 'Sunucu URL\'si',
            'helper' => 'Proxy için özel uç nokta. Ayarlandığında sunucu bölgesinin yerine geçer.',
        ],
        'custom_lib_url' => [
            'label' => 'Özel kütüphane URL\'si',
            'helper' => 'Amplitude Browser SDK betiği için özel URL (proxy kurulumları için).',
        ],
        'autocapture' => [
            'label' => 'Otomatik yakalama',
            'helper' => 'Sayfa görüntülemelerini, oturumları, form etkileşimlerini ve dosya indirmelerini otomatik olarak yakalayın.',
        ],
        'debug' => [
            'label' => 'Hata ayıklama modu',
            'helper' => 'Tarayıcı konsolunda hata ayıklama günlüğünü etkinleştirin.',
        ],
        'opt_out' => [
            'label' => 'Devre dışı bırak',
            'helper' => 'Amplitude\'a olay göndermeyi durdurun.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Oturum zaman aşımı (dakika)',
            'helper' => 'Yeni bir oturum başlamadan önceki hareketsizlik süresi (dakika).',
        ],
        'identity_storage' => [
            'label' => 'Kimlik depolama',
            'helper' => 'Kullanıcı ve cihaz kimliklerinin saklandığı yer.',
            'options' => [
                'cookie' => 'Çerez',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Hiçbiri',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Çerez alan adı',
            'helper' => 'Amplitude çerezinin alan adı (ör. alt alan adları arasında paylaşmak için .example.com).',
        ],
        'cookie_expiration' => [
            'label' => 'Çerez süresi (gün)',
            'helper' => 'Amplitude çerezinin süresi dolmadan önceki gün sayısı.',
        ],
        'secure_cookie' => [
            'label' => 'Güvenli çerez',
            'helper' => 'Çerezleri yalnızca HTTPS üzerinden iletin.',
        ],
        'min_id_length' => [
            'label' => 'Minimum kimlik uzunluğu',
            'helper' => 'Kullanıcı ve cihaz kimlikleri için minimum uzunluk. Amplitude varsayılanını kullanmak için boş bırakın.',
        ],
        'flush_queue_size' => [
            'label' => 'Gönderim kuyruğu boyutu',
            'helper' => 'Amplitude\'a gönderilmeden önce toplanan olay sayısı.',
        ],
        'flush_interval_millis' => [
            'label' => 'Gönderim aralığı (ms)',
            'helper' => 'Toplanan olayları göndermeden önce milisaniye cinsinden en uzun bekleme süresi.',
        ],
    ],
];
