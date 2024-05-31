<?php
declare(strict_types=1);

namespace App\Pay\Payjs\Impl;

use App\Entity\PayEntity;
use App\Pay\Base;
use App\Util\Client;
use App\Util\Http;
use GuzzleHttp\Exception\GuzzleException;
use Kernel\Exception\JSONException;

/**
 * Class Pay
 * @package App\Pay\Kvmpay\Impl
 */
class Pay extends Base implements \App\Pay\Pay
{

    const SCAN_API = "https://payjs.cn/api/native";
    const H5_API = "https://payjs.cn/api/h5";

    /**
     * @return PayEntity
     * @throws JSONException
     * @throws GuzzleException
     */
    public function trade(): PayEntity
    {
        if (!$this->config['mchid']) {
            throw new JSONException("请配置商户号");
        }

        if (!$this->config['key']) {
            throw new JSONException("请配置商户密钥");
        }

        $param = [
            'mchid' => $this->config['mchid'],
            'body' => $this->tradeNo, //订单名称
            'total_fee' => (int)($this->amount * 100),
            'out_trade_no' => $this->tradeNo,
            'notify_url' => $this->callbackUrl,
            'callback_url' => $this->returnUrl
        ];

        $param['sign'] = Signature::generateSignature($param, $this->config['key']);


        $api = self::SCAN_API;

        //扫码支付
        if ($this->code == 1) {
            $api = self::H5_API;
        }

        $response = Http::make()->post($api, [
            "form_params" => $param
        ]);

        $json = (array)json_decode($response->getBody()->getContents(), true);

        if ($json['return_code'] != 1) {
            throw new JSONException((string)$json['return_msg']);
        }

        $payEntity = new PayEntity();
 
        if ($this->code == 0) {
            $payEntity->setType(self::TYPE_LOCAL_RENDER);
            $payEntity->setUrl($json['code_url']);
        } else {
            $payEntity->setType(self::TYPE_REDIRECT);
            $payEntity->setUrl($json['h5_url']);
        }
        return $payEntity;
    }
}