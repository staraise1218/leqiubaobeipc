<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
// use think\

class Join extends Frontend
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
        $model = model('page');
        $info = $model->where('id', 1)->find();

        $this->assign('info', $info);

        return $this->view->fetch();
    }

}
