<?php

namespace app\index\controller;

use app\common\controller\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return $this->redirect('http://chat.cloud-cc.top/apk/chat.apk');
    }
}