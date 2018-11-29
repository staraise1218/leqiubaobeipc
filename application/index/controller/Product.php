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

    public function downloadzip(){
        $id = input('id');

        $album = Db::name('product_album')->where('id', $id)->find();
        $audio = Db::name('product_audio')
            ->where('album_id', $id)
            ->field('title, audiofile')
            ->select();

        $filename = './uploads/download/tmp'.'.zip';
        $zip = new \ZipArchive();

        if ($zip->open($filename, \ZIPARCHIVE::OVERWRITE || \ZIPARCHIVE::CREATE)!==TRUE) {
            exit('无法打开文件，或者文件创建失败');
        }
        

        if(is_array($audio) && !empty($audio)){
            foreach($audio as $item){
                $file = ltrim($item['audiofile'], '/');
                if(!file_exists($file)){  
                    exit("无法找到文件".$file); //即使创建，仍有可能失败。。。。  
                }
                if(file_exists($file)){
                    $zip->addFile( $file, $item['title'].'.mp3');//第二个参数是放在压缩包中的文件名称，如果文件可能会有重复，就需要注意一下
                }
            }
        }
        $zip->close();//关闭
        if(!file_exists($filename)){  
            exit("无法找到文件"); //即使创建，仍有可能失败。。。。  
        }
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header('Content-disposition: attachment; filename='.$album['title'].'.zip'); //文件名  
        header("Content-Type: application/zip"); //zip格式的  
        header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件  
        header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小  
        @readfile($filename);
    }
}
