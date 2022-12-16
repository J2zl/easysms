<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,
    // 默认发送配置
    'default' => env('SMS_DEFAULT', 'jumei'),
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => storage_path('logs/easy-sms.log'),
        ],
        'jumei' => [
            'app_id' => env('JUMEI_SMS_APP_ID'),
            'app_secret' => env('JUMEI_SMS_APP_SECRET'),
            'debug' => false,
        ],
        'gzdata' => [
            'account' => env('GZDATA_SMS_ACCOUNT'),
            'password' => env('GZDATA_SMS_PASSWORD'),
            'debug' => false
        ]
    ],
];