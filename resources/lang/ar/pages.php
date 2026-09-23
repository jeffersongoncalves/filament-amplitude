<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'إعدادات Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'إعدادات المشروع',
            'description' => 'اضبط الاتصال بمشروع Amplitude الخاص بك.',
        ],
        'tracking_debug' => [
            'heading' => 'التتبع والتصحيح',
            'description' => 'تحكم في سلوك التتبع والخصوصية وسجلات التصحيح.',
        ],
        'storage_cookies' => [
            'heading' => 'التخزين وملفات تعريف الارتباط',
            'description' => 'اضبط مكان تخزين هوية المستخدم وإعدادات ملفات تعريف الارتباط.',
        ],
        'advanced' => [
            'heading' => 'متقدم',
            'description' => 'اضبط تجميع الأحداث والتحقق من المعرّفات.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'مفتاح API',
            'helper' => 'مفتاح API لمشروعك في Amplitude. اتركه فارغًا لتعطيل التتبع.',
        ],
        'server_zone' => [
            'label' => 'منطقة الخادم',
            'helper' => 'منطقة إقامة بيانات مشروعك في Amplitude.',
            'options' => [
                'US' => 'الولايات المتحدة',
                'EU' => 'الاتحاد الأوروبي',
            ],
        ],
        'server_url' => [
            'label' => 'رابط الخادم',
            'helper' => 'نقطة نهاية مخصصة لوكيل. عند تعيينها تتجاوز منطقة الخادم.',
        ],
        'custom_lib_url' => [
            'label' => 'رابط مكتبة مخصص',
            'helper' => 'رابط مخصص لسكربت Amplitude Browser SDK (لإعدادات الوكيل).',
        ],
        'autocapture' => [
            'label' => 'الالتقاط التلقائي',
            'helper' => 'التقاط مشاهدات الصفحات والجلسات وتفاعلات النماذج وتنزيلات الملفات تلقائيًا.',
        ],
        'debug' => [
            'label' => 'وضع التصحيح',
            'helper' => 'تفعيل سجلات التصحيح في وحدة تحكم المتصفح.',
        ],
        'opt_out' => [
            'label' => 'إلغاء الاشتراك',
            'helper' => 'إيقاف إرسال الأحداث إلى Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'مهلة الجلسة (دقائق)',
            'helper' => 'دقائق عدم النشاط قبل بدء جلسة جديدة.',
        ],
        'identity_storage' => [
            'label' => 'تخزين الهوية',
            'helper' => 'مكان حفظ معرّفات المستخدم والجهاز.',
            'options' => [
                'cookie' => 'ملف تعريف الارتباط',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'لا شيء',
            ],
        ],
        'cookie_domain' => [
            'label' => 'نطاق ملف تعريف الارتباط',
            'helper' => 'نطاق ملف تعريف ارتباط Amplitude (مثل .example.com لمشاركته بين النطاقات الفرعية).',
        ],
        'cookie_expiration' => [
            'label' => 'انتهاء ملف تعريف الارتباط (أيام)',
            'helper' => 'عدد الأيام قبل انتهاء صلاحية ملف تعريف ارتباط Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'ملف تعريف ارتباط آمن',
            'helper' => 'إرسال ملفات تعريف الارتباط عبر HTTPS فقط.',
        ],
        'min_id_length' => [
            'label' => 'الحد الأدنى لطول المعرّف',
            'helper' => 'الحد الأدنى لطول معرّفات المستخدم والجهاز. اتركه فارغًا لاستخدام القيمة الافتراضية لـ Amplitude.',
        ],
        'flush_queue_size' => [
            'label' => 'حجم طابور الإرسال',
            'helper' => 'عدد الأحداث المجمّعة قبل إرسالها إلى Amplitude.',
        ],
        'flush_interval_millis' => [
            'label' => 'فترة الإرسال (مللي ثانية)',
            'helper' => 'أقصى وقت بالمللي ثانية للانتظار قبل إرسال الأحداث المجمّعة.',
        ],
    ],
];
