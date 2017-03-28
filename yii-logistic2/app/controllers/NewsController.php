<?php
namespace app\controllers;

use yii\easyii\modules\news\api\News;
use pjhl\multilanguage\LangHelper;

class NewsController extends \yii\web\Controller
{
    public function actionIndex($tag = null)
    {
        return $this->render('index',[
            'news' => News::items(['tags' => $tag, 'pagination' => ['pageSize' => 2]])
        ]);
    }

    public function actionView($slug)
    {
        $lang = LangHelper::getLanguage(\Yii::$app->language)['id'];
        $count_news = \yii\easyii\modules\news\models\News::find()->where(['slug'=>$slug])
                ->andwhere(['lang_id'=>$lang])
                ->count();
        if ($count_news > 0)
        {    
          $news = News::get($slug);
           if(!$news){
            throw new \yii\web\NotFoundHttpException('News not found.');
           }

            return $this->render('view', [
              'news' => $news
            ]);
        }else{
            return $this->redirect('/');
        }
    }
}
