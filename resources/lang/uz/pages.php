<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics sozlamalari',
    'sections' => [
        'project_configuration' => [
            'heading' => 'Loyiha konfiguratsiyasi',
            'description' => 'Amplitude loyihangizga ulanishni sozlang.',
        ],
        'tracking_debug' => [
            'heading' => 'Kuzatuv va disk raskadrovka',
            'description' => 'Kuzatuv xatti-harakati, maxfiylik va disk raskadrovka jurnalini boshqaring.',
        ],
        'storage_cookies' => [
            'heading' => 'Saqlash va cookie-fayllar',
            'description' => 'Foydalanuvchi identifikatori qayerda saqlanishini va cookie sozlamalarini belgilang.',
        ],
        'advanced' => [
            'heading' => 'Kengaytirilgan',
            'description' => 'Hodisalarni paketlab yuborish va identifikatorlarni tekshirishni sozlang.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API kaliti',
            'helper' => 'Amplitude loyihangiz API kaliti. Kuzatuvni oʻchirish uchun boʻsh qoldiring.',
        ],
        'server_zone' => [
            'label' => 'Server zonasi',
            'helper' => 'Amplitude loyihangiz maʼlumotlari saqlanadigan hudud.',
            'options' => [
                'US' => 'Amerika Qoʻshma Shtatlari',
                'EU' => 'Yevropa Ittifoqi',
            ],
        ],
        'server_url' => [
            'label' => 'Server URL',
            'helper' => 'Proksi uchun maxsus endpoint. Oʻrnatilsa, server zonasi oʻrniga ishlatiladi.',
        ],
        'custom_lib_url' => [
            'label' => 'Maxsus kutubxona URL',
            'helper' => 'Amplitude Browser SDK skripti uchun maxsus URL (proksi sozlamalari uchun).',
        ],
        'autocapture' => [
            'label' => 'Avtomatik yozib olish',
            'helper' => 'Sahifa koʻrishlari, seanslar, forma bilan ishlash va fayl yuklab olishlarni avtomatik yozib olish.',
        ],
        'debug' => [
            'label' => 'Disk raskadrovka rejimi',
            'helper' => 'Brauzer konsolida disk raskadrovka jurnalini yoqish.',
        ],
        'opt_out' => [
            'label' => 'Rad etish',
            'helper' => 'Amplitudeʼga hodisalar yuborishni toʻxtatish.',
        ],
        'session_timeout_minutes' => [
            'label' => 'Seans vaqti (daqiqa)',
            'helper' => 'Yangi seans boshlanishidan oldingi faolsizlik daqiqalari.',
        ],
        'identity_storage' => [
            'label' => 'Identifikatorni saqlash',
            'helper' => 'Foydalanuvchi va qurilma identifikatorlari saqlanadigan joy.',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'Yoʻq',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookie domeni',
            'helper' => 'Amplitude cookie domeni (masalan, subdomenlar boʻylab ulashish uchun .example.com).',
        ],
        'cookie_expiration' => [
            'label' => 'Cookie muddati (kun)',
            'helper' => 'Amplitude cookie muddati tugashigacha boʻlgan kunlar soni.',
        ],
        'secure_cookie' => [
            'label' => 'Xavfsiz cookie',
            'helper' => 'Cookie-fayllarni faqat HTTPS orqali uzatish.',
        ],
        'min_id_length' => [
            'label' => 'Minimal ID uzunligi',
            'helper' => 'Foydalanuvchi va qurilma IDʼlarining minimal uzunligi. Amplitude standartidan foydalanish uchun boʻsh qoldiring.',
        ],
        'flush_queue_size' => [
            'label' => 'Yuborish navbati hajmi',
            'helper' => 'Amplitudeʼga yuborishdan oldin paketlanadigan hodisalar soni.',
        ],
        'flush_interval_millis' => [
            'label' => 'Yuborish oraligʻi (ms)',
            'helper' => 'Paketlangan hodisalarni yuborishdan oldin kutishning maksimal vaqti (millisekund).',
        ],
    ],
];
