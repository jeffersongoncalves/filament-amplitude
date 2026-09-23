<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics parametrləri',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Layihə konfiqurasiyası',
            'description' => 'Amplitude layihənizə bağlantını konfiqurasiya edin.',
        ],
        'tracking_debug' => [
            'heading' => 'İzləmə və sazlama',
            'description' => 'İzləmə davranışını, məxfiliyi və sazlama jurnalını idarə edin.',
        ],
        'storage_cookies' => [
            'heading' => 'Saxlama və kukilər',
            'description' => 'İstifadəçi kimliyinin harada saxlanacağını və kuki parametrlərini konfiqurasiya edin.',
        ],
        'advanced' => [
            'heading' => 'Qabaqcıl',
            'description' => 'Hadisələrin paketlənməsini və identifikatorların yoxlanmasını tənzimləyin.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API açarı',
            'helper' => 'Amplitude layihənizin API açarı. İzləməni deaktiv etmək üçün boş buraxın.',
        ],
        'server_zone' => [
            'label' => 'Server zonası',
            'helper' => 'Amplitude layihənizin məlumat yerləşmə regionu.',
            'options' => [
                'US' => 'Amerika Birləşmiş Ştatları',
                'EU' => 'Avropa İttifaqı',
            ],
        ],
        'server_url' => [
            'label' => 'Server URL-i',
            'helper' => 'Proksi üçün xüsusi endpoint. Təyin edildikdə server zonasını əvəz edir.',
        ],
        'custom_lib_url' => [
            'label' => 'Xüsusi kitabxana URL-i',
            'helper' => 'Amplitude Browser SDK skripti üçün xüsusi URL (proksi quraşdırmaları üçün).',
        ],
        'autocapture' => [
            'label' => 'Avtomatik yaxalama',
            'helper' => 'Səhifə baxışlarını, sessiyaları, forma qarşılıqlı əlaqələrini və fayl yükləmələrini avtomatik yaxalayın.',
        ],
        'debug' => [
            'label' => 'Sazlama rejimi',
            'helper' => 'Brauzer konsoluna sazlama jurnalını aktiv edin.',
        ],
        'opt_out' => [
            'label' => 'İmtina',
            'helper' => 'Hadisələrin Amplitude-a göndərilməsini dayandırın.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Sessiya vaxtı (dəqiqə)',
            'helper' => 'Yeni sessiya başlamazdan əvvəl fəaliyyətsizlik dəqiqələri.',
        ],
        'identity_storage' => [
            'label' => 'Kimlik saxlanması',
            'helper' => 'İstifadəçi və cihaz identifikatorlarının harada saxlanacağı.',
            'options' => [
                'cookie' => 'Kuki',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Heç biri',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Kuki domeni',
            'helper' => 'Amplitude kukisi üçün domen (məs. subdomenlər arasında paylaşmaq üçün .example.com).',
        ],
        'cookie_expiration' => [
            'label' => 'Kukinin bitmə müddəti (gün)',
            'helper' => 'Amplitude kukisinin müddəti bitənə qədər günlərin sayı.',
        ],
        'secure_cookie' => [
            'label' => 'Təhlükəsiz kuki',
            'helper' => 'Kukiləri yalnız HTTPS üzərindən ötürün.',
        ],
        'min_id_length' => [
            'label' => 'Minimum ID uzunluğu',
            'helper' => 'İstifadəçi və cihaz ID-lərinin minimum uzunluğu. Amplitude standartından istifadə üçün boş buraxın.',
        ],
        'flush_queue_size' => [
            'label' => 'Göndərmə növbəsinin ölçüsü',
            'helper' => 'Amplitude-a göndərilməzdən əvvəl paketlənən hadisələrin sayı.',
        ],
        'flush_interval_millis' => [
            'label' => 'Göndərmə intervalı (ms)',
            'helper' => 'Paketlənmiş hadisələri göndərməzdən əvvəl maksimum gözləmə müddəti (millisaniyə).',
        ],
    ],
];
