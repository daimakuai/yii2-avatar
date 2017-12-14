<?php
namespace daimakuai\avatar;

/**
 * @see 代码块中文网  http://www.daimakuai.com
 * @author yt  <431910788@qq.com>
 * 设置挂件
 * 如何配置请到官网（代码块中文网：www.daimakuai.com）查看相关文章
 */
use Yii;
use yii\bootstrap\Widget;
use daimakuai\avatar\assets\AvatarAsset;
use yii\base\Object;
use yii\helpers\Html;
use yii\widgets\InputWidget;
use yii\web\View;

class AvatarUploadWidget extends Widget
{
    public $options = ['class' => 'form-control'];
    public $imageOptions = [];

    public $inForm = false;
    public $imageUrl = '';
    public $setTarget = '';
    public $model;
    public $type = 'hidden';
    public $attribute = [];
    public $attributes = [];
    public $view ;

    public function run()
    {
        parent::init();
        $this->registerClientScript();
    }

    public function registerClientScript()
    {
        AvatarAsset::register($this->view);
        //$script = "";
        //$this->view->registerJs($script,View::POS_READY);
    }

    public function setFooter()
    {
        $model = new UploadForm();
        return $this->render('upload', ['model' => $model]);
    }

}