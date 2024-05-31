<?php
declare(strict_types=1);

namespace App\Plugin\Live\Hook;

use App\Controller\Base\View\UserPlugin;
use App\Util\Plugin;
use Kernel\Annotation\Hook;

class Main extends UserPlugin
{
    #[Hook(point: \App\Consts\Hook::USER_VIEW_INDEX_HEADER)]
    public function header()
    {
        echo '<link rel="stylesheet" type="text/css" href="' . Plugin('Live', 'View/css/waifu.css') . '" />';
    }
    #[Hook(point: \App\Consts\Hook::USER_VIEW_INDEX_BODY)]
    public function body()
    {
        echo '<script type="text/javascript" src="' . Plugin('Live', 'View/js/autoload.js') . '"></script>';
        echo '<script type="text/javascript" src="' . Plugin('Live', 'View/js/live2d.min.js') . '"></script>';
        echo '<script type="text/javascript" src="' . Plugin('Live', 'View/js/waifu-tips.js') . '"></script>';
        echo '<script src="' . Plugin('Live', 'View/js/waifu-tips.json') . '"></script>';
    }
}