<?php

declare(strict_types=1);

namespace App\Plugin\MouseMenu\Hook;

use App\Controller\Base\View\UserPlugin;
use Kernel\Annotation\Hook;

class Main extends UserPlugin
{
    #[Hook(point: \App\Consts\Hook::USER_VIEW_INDEX_BODY)]
    public function body()
    {
        //echo $this->render("body", "menu.html", ["cfg" => Plugin::getConfig("MouseMenu")]);
        echo $this->render("MouseMenu", "menu.html");
    }
    #[Hook(point: \App\Consts\Hook::ADMIN_VIEW_FOOTER)]
    public function footer()
    {
        echo '<script type="text/javascript" src="https://lib.baomitu.com/layer/3.1.1/layer.js"></script>';
    }
}