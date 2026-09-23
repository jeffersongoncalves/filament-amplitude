<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'تنظیمات Amplitude Analytics',
    'sections' => [
        'project_configuration' => [
            'heading' => 'پیکربندی پروژه',
            'description' => 'اتصال به پروژه Amplitude خود را پیکربندی کنید.',
        ],
        'tracking_debug' => [
            'heading' => 'ردیابی و اشکال‌زدایی',
            'description' => 'رفتار ردیابی، حریم خصوصی و گزارش‌گیری اشکال‌زدایی را کنترل کنید.',
        ],
        'storage_cookies' => [
            'heading' => 'ذخیره‌سازی و کوکی‌ها',
            'description' => 'محل ذخیره هویت کاربر و تنظیمات کوکی را پیکربندی کنید.',
        ],
        'advanced' => [
            'heading' => 'پیشرفته',
            'description' => 'دسته‌بندی ارسال رویدادها و اعتبارسنجی شناسه‌ها را تنظیم کنید.',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'کلید API',
            'helper' => 'کلید API پروژه Amplitude شما. برای غیرفعال کردن ردیابی خالی بگذارید.',
        ],
        'server_zone' => [
            'label' => 'منطقه سرور',
            'helper' => 'منطقه نگهداری داده‌های پروژه Amplitude شما.',
            'options' => [
                'US' => 'ایالات متحده',
                'EU' => 'اتحادیه اروپا',
            ],
        ],
        'server_url' => [
            'label' => 'آدرس سرور',
            'helper' => 'نقطه پایانی سفارشی برای پراکسی. در صورت تنظیم، منطقه سرور را نادیده می‌گیرد.',
        ],
        'custom_lib_url' => [
            'label' => 'آدرس کتابخانه سفارشی',
            'helper' => 'آدرس سفارشی اسکریپت Amplitude Browser SDK (برای تنظیمات پراکسی).',
        ],
        'autocapture' => [
            'label' => 'ثبت خودکار',
            'helper' => 'ثبت خودکار بازدید صفحات، نشست‌ها، تعامل با فرم‌ها و دانلود فایل‌ها.',
        ],
        'debug' => [
            'label' => 'حالت اشکال‌زدایی',
            'helper' => 'فعال‌سازی گزارش‌های اشکال‌زدایی در کنسول مرورگر.',
        ],
        'opt_out' => [
            'label' => 'انصراف',
            'helper' => 'توقف ارسال رویدادها به Amplitude.',
        ],
        'session_timeout_minutes' => [
            'label' => 'مهلت نشست (دقیقه)',
            'helper' => 'دقایق عدم فعالیت پیش از شروع نشست جدید.',
        ],
        'identity_storage' => [
            'label' => 'ذخیره‌سازی هویت',
            'helper' => 'محل نگهداری شناسه‌های کاربر و دستگاه.',
            'options' => [
                'cookie' => 'کوکی',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'هیچ',
            ],
        ],
        'cookie_domain' => [
            'label' => 'دامنه کوکی',
            'helper' => 'دامنه کوکی Amplitude (مثلاً ‎.example.com برای اشتراک میان زیردامنه‌ها).',
        ],
        'cookie_expiration' => [
            'label' => 'انقضای کوکی (روز)',
            'helper' => 'تعداد روزها تا انقضای کوکی Amplitude.',
        ],
        'secure_cookie' => [
            'label' => 'کوکی امن',
            'helper' => 'کوکی‌ها فقط از طریق HTTPS ارسال شوند.',
        ],
        'min_id_length' => [
            'label' => 'حداقل طول شناسه',
            'helper' => 'حداقل طول شناسه‌های کاربر و دستگاه. برای استفاده از پیش‌فرض Amplitude خالی بگذارید.',
        ],
        'flush_queue_size' => [
            'label' => 'اندازه صف ارسال',
            'helper' => 'تعداد رویدادهایی که پیش از ارسال به Amplitude دسته‌بندی می‌شوند.',
        ],
        'flush_interval_millis' => [
            'label' => 'فاصله ارسال (میلی‌ثانیه)',
            'helper' => 'حداکثر زمان انتظار بر حسب میلی‌ثانیه پیش از ارسال رویدادهای دسته‌بندی‌شده.',
        ],
    ],
];
