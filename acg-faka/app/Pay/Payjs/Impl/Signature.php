<?php
declare(strict_types=1);

namespace App\Pay\Payjs\Impl;

use Kernel\Util\Context;

/**
 * Class Signature
 * @package App\Pay\Kvmpay\Impl
 */
class Signature implements \App\Pay\Signature
{

    /**
     * 生成签名
     * @param array $data
     * @param string $key
     * @return string
     */
    public static function generateSignature(array $data, string $key): string
    {
        array_filter($data);
        ksort($data);
        return strtoupper(md5(urldecode(http_build_query($data) . '&key=' . $key)));
    }

    /**
     * @inheritDoc
     */
    public function verification(array $data, array $config): bool
    {
        $sign = $data['sign'];
        unset($data['sign']);
        $generateSignature = self::generateSignature($data, $config['key']);
        if ($sign != $generateSignature) {
            return false;
        }

        $data['total_fee'] = (float)($data['total_fee'] / 100);
        Context::set(\App\Consts\Pay::DAFA, $data);
        return true;
    }
}