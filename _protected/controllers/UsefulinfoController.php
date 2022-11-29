<?php

namespace app\controllers;
use app\models\Usefulinfo;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class UsefulinfoController extends AppController

{
    public function actionIndex()
    {
       $usefulinfo = Usefulinfo::find()->select('id, title, description, alias')->all();          
        return $this->render('index', compact('usefulinfo'));
    }
   

    
        public function actionView() {
        $alias = \Yii::$app->request->get('alias');
        $usefulinfo = Usefulinfo::findOne(['alias' => $alias]);
        $this->setMeta('' . $usefulinfo->title, $usefulinfo->description);
        if(empty($usefulinfo)) throw new \yii\web\HttpException(404);
        return $this->render('view', compact('usefulinfo'));
    }

}
