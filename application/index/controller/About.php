<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class About extends Frontend
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
        $info = $model->where('id', 2)->find();

        // 团队
        $teamlist = Db::name('team')
            ->order('id desc')
            ->select(2);


        // 团队
        $link = Db::name('link')
            ->where('category_id', 5)
            ->order('id desc')
            ->limit(6)
            ->select();

        $this->assign('info', $info);
        $this->assign('teamlist', $teamlist);
        $this->assign('link', $link);
        return $this->view->fetch();
    }

}
