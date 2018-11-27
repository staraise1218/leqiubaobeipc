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

        // 专辑
        $album = Db::name('product_album')
            ->order('id desc')
            ->field('id, title, thumbimage')
            ->limit(9)
            ->select();



        $this->assign('productVideo0', $list[0]);
        $this->assign('productVideo1', $list[1]);
        $this->assign('audio', $audio);
        $this->assign('album', $album);
        return $this->view->fetch();
    }

    // 专辑页面
    public function musicList(){
        $id = input('id');

        $album = Db::name('product_album')
            ->where('id', $id)
            ->find();

        $album['tag'] = explode(',', rtrim($album['tag']));

        $audio = Db::name('product_audio')
            ->where('album_id', $id)
            ->order('weigh desc, id desc')
            ->select();

        $this->assign('album', $album);
        $this->assign('audio', $audio);
        return $this->fetch();
    }


    function download(){
        $id = input('id');
        $info = Db::name('product_audio')->where('id', $id)->find();
        $full_path = ltrim($info['audiofile'], '/');
        $filename = $info['title'];

        $file_size = filesize($full_path);

        header("Content-type:audio/mpeg");
        header("Accept-Ranges:bytes");
        header("Accept-Length:$file_size");
        header("Content-Disposition:attachment;filename=".$filename.".mp3");
        readfile($full_path);
        exit();
    }
}
