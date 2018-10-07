<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class Music extends Frontend
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
        $info = Db::name('music')
            ->order('id desc')
            ->find();

        $this->assign('info', $info);

        return $this->view->fetch();
    }

}
