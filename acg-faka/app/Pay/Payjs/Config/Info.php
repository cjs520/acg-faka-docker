<?php
declare (strict_types=1);

return [
    'version' => '1.0.0',
    'name' => 'Payjs',
    'author' => '荔枝',
    'website' => '#',
    'description' => 'Payjs，一个为个人商户提供微信支付接口的服务商平台。',
    'options' => [
        '0' => '扫码支付',
        '1' => 'H5支付'
    ],
    'callback' => [
        \App\Consts\Pay::IS_SIGN => true,
        \App\Consts\Pay::IS_STATUS => true,
        \App\Consts\Pay::FIELD_STATUS_KEY => 'return_code',
        \App\Consts\Pay::FIELD_STATUS_VALUE => '1',
        \App\Consts\Pay::FIELD_ORDER_KEY => 'out_trade_no',
        \App\Consts\Pay::FIELD_AMOUNT_KEY => 'total_fee',
        \App\Consts\Pay::FIELD_RESPONSE => 'success'
    ]
];