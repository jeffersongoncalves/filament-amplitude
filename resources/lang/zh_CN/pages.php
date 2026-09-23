<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics 设置',
    'sections' => [
        'project_configuration' => [
            'heading' => '项目配置',
            'description' => '配置与你的 Amplitude 项目的连接。',
        ],
        'tracking_debug' => [
            'heading' => '跟踪与调试',
            'description' => '控制跟踪行为、隐私和调试日志。',
        ],
        'storage_cookies' => [
            'heading' => '存储与 Cookie',
            'description' => '配置用户身份的存储位置和 Cookie 设置。',
        ],
        'advanced' => [
            'heading' => '高级',
            'description' => '微调事件批量发送和标识符校验。',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API 密钥',
            'helper' => '你的 Amplitude 项目 API 密钥。留空则禁用跟踪。',
        ],
        'server_zone' => [
            'label' => '服务器区域',
            'helper' => '你的 Amplitude 项目的数据驻留区域。',
            'options' => [
                'US' => '美国',
                'EU' => '欧盟',
            ],
        ],
        'server_url' => [
            'label' => '服务器 URL',
            'helper' => '用于代理的自定义端点。设置后将覆盖服务器区域。',
        ],
        'custom_lib_url' => [
            'label' => '自定义库 URL',
            'helper' => 'Amplitude Browser SDK 脚本的自定义 URL（用于代理设置）。',
        ],
        'autocapture' => [
            'label' => '自动捕获',
            'helper' => '自动捕获页面浏览、会话、表单交互和文件下载。',
        ],
        'debug' => [
            'label' => '调试模式',
            'helper' => '在浏览器控制台中启用调试日志。',
        ],
        'opt_out' => [
            'label' => '退出跟踪',
            'helper' => '停止向 Amplitude 发送事件。',
        ],
        'session_timeout_minutes' => [
            'label' => '会话超时（分钟）',
            'helper' => '开始新会话前的无操作分钟数。',
        ],
        'identity_storage' => [
            'label' => '身份存储',
            'helper' => '用户和设备标识符的保存位置。',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => '无',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookie 域名',
            'helper' => 'Amplitude Cookie 的域名（例如 .example.com，以在子域之间共享）。',
        ],
        'cookie_expiration' => [
            'label' => 'Cookie 有效期（天）',
            'helper' => 'Amplitude Cookie 过期前的天数。',
        ],
        'secure_cookie' => [
            'label' => '安全 Cookie',
            'helper' => '仅通过 HTTPS 传输 Cookie。',
        ],
        'min_id_length' => [
            'label' => '最小 ID 长度',
            'helper' => '用户和设备 ID 的最小长度。留空则使用 Amplitude 默认值。',
        ],
        'flush_queue_size' => [
            'label' => '发送队列大小',
            'helper' => '发送到 Amplitude 前批量汇总的事件数量。',
        ],
        'flush_interval_millis' => [
            'label' => '发送间隔（毫秒）',
            'helper' => '发送批量事件前的最长等待时间（毫秒）。',
        ],
    ],
];
