<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Amplitude Analytics',
    'title' => 'Amplitude Analytics सेटिंग्स',
    'sections' => [
        'project_configuration' => [
            'heading' => 'प्रोजेक्ट कॉन्फ़िगरेशन',
            'description' => 'अपने Amplitude प्रोजेक्ट से कनेक्शन कॉन्फ़िगर करें।',
        ],
        'tracking_debug' => [
            'heading' => 'ट्रैकिंग और डीबग',
            'description' => 'ट्रैकिंग व्यवहार, गोपनीयता और डीबग लॉगिंग नियंत्रित करें।',
        ],
        'storage_cookies' => [
            'heading' => 'स्टोरेज और कुकीज़',
            'description' => 'उपयोगकर्ता पहचान कहाँ संग्रहीत हो और कुकी सेटिंग्स कॉन्फ़िगर करें।',
        ],
        'advanced' => [
            'heading' => 'उन्नत',
            'description' => 'इवेंट बैचिंग और पहचानकर्ता सत्यापन को बारीकी से समायोजित करें।',
        ],
    ],
    'fields' => [
        'api_key' => [
            'label' => 'API कुंजी',
            'helper' => 'आपके Amplitude प्रोजेक्ट की API कुंजी। ट्रैकिंग अक्षम करने के लिए खाली छोड़ें।',
        ],
        'server_zone' => [
            'label' => 'सर्वर ज़ोन',
            'helper' => 'आपके Amplitude प्रोजेक्ट का डेटा रेज़िडेंसी क्षेत्र।',
            'options' => [
                'US' => 'संयुक्त राज्य अमेरिका',
                'EU' => 'यूरोपीय संघ',
            ],
        ],
        'server_url' => [
            'label' => 'सर्वर URL',
            'helper' => 'प्रॉक्सी के लिए कस्टम एंडपॉइंट। सेट होने पर सर्वर ज़ोन को ओवरराइड करता है।',
        ],
        'custom_lib_url' => [
            'label' => 'कस्टम लाइब्रेरी URL',
            'helper' => 'Amplitude Browser SDK स्क्रिप्ट के लिए कस्टम URL (प्रॉक्सी सेटअप के लिए)।',
        ],
        'autocapture' => [
            'label' => 'ऑटोकैप्चर',
            'helper' => 'पेज व्यू, सत्र, फ़ॉर्म इंटरैक्शन और फ़ाइल डाउनलोड स्वचालित रूप से कैप्चर करें।',
        ],
        'debug' => [
            'label' => 'डीबग मोड',
            'helper' => 'ब्राउज़र कंसोल में डीबग लॉगिंग सक्षम करें।',
        ],
        'opt_out' => [
            'label' => 'ऑप्ट आउट',
            'helper' => 'Amplitude को इवेंट भेजना बंद करें।',
        ],
        'session_timeout_minutes' => [
            'label' => 'सत्र टाइमआउट (मिनट)',
            'helper' => 'नया सत्र शुरू होने से पहले निष्क्रियता के मिनट।',
        ],
        'identity_storage' => [
            'label' => 'पहचान स्टोरेज',
            'helper' => 'उपयोगकर्ता और डिवाइस पहचानकर्ता कहाँ सहेजे जाते हैं।',
            'options' => [
                'cookie' => 'कुकी',
                'localStorage' => 'Local Storage',
                'sessionStorage' => 'Session Storage',
                'none' => 'कोई नहीं',
            ],
        ],
        'cookie_domain' => [
            'label' => 'कुकी डोमेन',
            'helper' => 'Amplitude कुकी का डोमेन (जैसे सबडोमेन के बीच साझा करने के लिए .example.com)।',
        ],
        'cookie_expiration' => [
            'label' => 'कुकी समाप्ति (दिन)',
            'helper' => 'Amplitude कुकी की समाप्ति से पहले दिनों की संख्या।',
        ],
        'secure_cookie' => [
            'label' => 'सुरक्षित कुकी',
            'helper' => 'कुकीज़ केवल HTTPS पर भेजें।',
        ],
        'min_id_length' => [
            'label' => 'न्यूनतम ID लंबाई',
            'helper' => 'उपयोगकर्ता और डिवाइस ID की न्यूनतम लंबाई। Amplitude डिफ़ॉल्ट उपयोग करने के लिए खाली छोड़ें।',
        ],
        'flush_queue_size' => [
            'label' => 'फ़्लश क्यू आकार',
            'helper' => 'Amplitude को भेजने से पहले बैच किए जाने वाले इवेंट की संख्या।',
        ],
        'flush_interval_millis' => [
            'label' => 'फ़्लश अंतराल (ms)',
            'helper' => 'बैच किए गए इवेंट भेजने से पहले मिलीसेकंड में अधिकतम प्रतीक्षा समय।',
        ],
    ],
];
