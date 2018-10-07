<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use think\Db;

class News extends Frontend
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
        $huodonglist = Db::name('news')
            ->where('category_id', 2)
            ->order('id desc')
            ->paginate(4, false, ['query'=>request()->param()]);

        $dongtailist = Db::name('news')
            ->where('category_id', 1)
            ->order('id desc')
            ->paginate(5, false, ['query'=>request()->param()]);;

        $this->assign('huodonglist', $huodonglist);
        $this->assign('dongtailist', $dongtailist);

        return $this->view->fetch();
    }

}
