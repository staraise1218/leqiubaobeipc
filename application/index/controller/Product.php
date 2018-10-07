<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class Product extends Frontend
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
        $model = model('product_video');
        $list = $model->order('weigh desc, id desc')
            ->limit(2)
            ->select();

        // 音频
        $audio = Db::name('product_audio')
            ->order('weigh desc, id desc')
            ->limit(10)
            ->select();

        $this->assign('productVideo0', $list[0]);
        $this->assign('productVideo1', $list[1]);
        $this->assign('audio', $audio);
        return $this->view->fetch();
    }

}
