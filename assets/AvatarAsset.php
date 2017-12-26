<?php
namespace daimakuai\avatar\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.daimakuai.com/
 * @copyright Copyright (c) 2015 代码块中文网
 * @author Xianan Huang <xianan_huang@163.com>
 */
class AvatarAsset extends AssetBundle
{
    public $css = [
        'css/cropper.min.css',
        'css/main.css',
        'css/site.css'
    ];
    
    public $js = [
        '//code.jquery.com/jquery-1.12.4.min.js',
        'js/cropper.min.js',
        'js/main.js',
        'js/site.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
    
    /**
     * 初始化：sourcePath赋值
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR . 'statics';
    }
}