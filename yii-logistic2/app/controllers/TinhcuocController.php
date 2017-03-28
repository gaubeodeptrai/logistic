<?php
namespace app\controllers;

use yii\easyii\modules\news\api\News;
use pjhl\multilanguage\LangHelper;

class TinhcuocController extends \yii\web\Controller
{
    public function actionIndex($tag = null)
    {
        return $this->render('index',[
            'news' => News::items(['tags' => $tag, 'pagination' => ['pageSize' => 2]])
        ]);
    }
    
    public function actionView(){
        return $this->render('view');
    }
}
