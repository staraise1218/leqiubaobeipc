<?php

namespace app\admin\model;

use think\Model;

class Link extends Model
{
    // 表名
    protected $name = 'link';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [

    ];
    
    public function category()
    {
        return $this->belongsTo('category', 'category_id', 'id', [], 'left')->setEagerlyType(0);;
    }
    







}
