<?php
declare(strict_types=1);

namespace App\Controller\User\Api;

use App\Controller\Base\API\User;
use App\Interceptor\Waf;
use Kernel\Annotation\Inject;
use Kernel\Annotation\Interceptor;

#[Interceptor(Waf::class, Interceptor::TYPE_API)]
class RechargeNotification extends User
{
    #[Inject]
    private \App\Service\Recharge $recharge;

    /**
     * @return string
     */
    public function callback(): string
    {
        $handle = $_GET["_PARAMETER"][0];
        $data = $_POST;
        if (empty($data)) {
            $data = $_REQUEST;
            unset($data["s"]);
        }
        // 增加usdtmore的处理逻辑
        if ($handle == "USDTMore") {
            $data = json_decode(file_get_contents("php://input"), true);
        }

        return $this->recharge->callback($handle, $data);
    }
}
