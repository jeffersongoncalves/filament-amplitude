<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics 設定',
    'sections' => [
        'project_configuration' => [
            'heading' => 'プロジェクト設定',
            'description' => 'Amplitude プロジェクトへの接続を設定します。',
        ],
        'tracking_debug' => [
            'heading' => 'トラッキングとデバッグ',
            'description' => 'トラッキングの動作、プライバシー、デバッグログを制御します。',
        ],
        'storage_cookies' => [
            'heading' => 'ストレージと Cookie',
            'description' => 'ユーザー ID の保存場所と Cookie を設定します。',
        ],
        'advanced' => [
            'heading' => '詳細',
            'description' => 'イベントのバッチ送信と ID の検証を調整します。',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API キー',
            'helper' => 'Amplitude プロジェクトの API キー。空欄にするとトラッキングを無効にします。',
        ],
        'server_zone' => [
            'label' => 'サーバーゾーン',
            'helper' => 'Amplitude プロジェクトのデータ保存リージョン。',
            'options' => [
                'US' => '米国',
                'EU' => '欧州連合',
            ],
        ],
        'server_url' => [
            'label' => 'サーバー URL',
            'helper' => 'プロキシ用のカスタムエンドポイント。設定するとサーバーゾーンより優先されます。',
        ],
        'custom_lib_url' => [
            'label' => 'カスタムライブラリ URL',
            'helper' => 'Amplitude Browser SDK スクリプトのカスタム URL（プロキシ構成用）。',
        ],
        'autocapture' => [
            'label' => '自動キャプチャ',
            'helper' => 'ページビュー、セッション、フォーム操作、ファイルダウンロードを自動的に記録します。',
        ],
        'debug' => [
            'label' => 'デバッグモード',
            'helper' => 'ブラウザコンソールへのデバッグログを有効にします。',
        ],
        'opt_out' => [
            'label' => 'オプトアウト',
            'helper' => 'Amplitude へのイベント送信を停止します。',
        ],
        'session_timeout_minutes' => [
            'label' => 'セッションタイムアウト（分）',
            'helper' => '新しいセッションが始まるまでの無操作時間（分）。',
        ],
        'identity_storage' => [
            'label' => 'ID の保存先',
            'helper' => 'ユーザー ID とデバイス ID を保存する場所。',
            'options' => [
                'cookie' => 'Cookie',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'なし',
            ],
        ],
        'cookie_domain' => [
            'label' => 'Cookie ドメイン',
            'helper' => 'Amplitude Cookie のドメイン（サブドメイン間で共有する場合は .example.com など）。',
        ],
        'cookie_expiration' => [
            'label' => 'Cookie の有効期限（日）',
            'helper' => 'Amplitude の Cookie が期限切れになるまでの日数。',
        ],
        'secure_cookie' => [
            'label' => 'セキュア Cookie',
            'helper' => 'Cookie を HTTPS 経由でのみ送信します。',
        ],
        'min_id_length' => [
            'label' => 'ID の最小長',
            'helper' => 'ユーザー ID とデバイス ID の最小長。空欄にすると Amplitude のデフォルトを使用します。',
        ],
        'flush_queue_size' => [
            'label' => '送信キューのサイズ',
            'helper' => 'Amplitude に送信する前にまとめるイベント数。',
        ],
        'flush_interval_millis' => [
            'label' => '送信間隔（ms）',
            'helper' => 'まとめたイベントを送信するまでの最大待機時間（ミリ秒）。',
        ],
    ],
];
