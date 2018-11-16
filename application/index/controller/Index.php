<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        // 音频
        $audiolist = Db::name('product_audio')
            ->order('weigh desc, id desc')
            ->limit(2)
            ->select();

        $this->assign('audiolist', $audiolist);
        return $this->view->fetch();
    }

}
