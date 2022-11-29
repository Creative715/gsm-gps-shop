<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pages;

class SiteController extends AppController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $pages = Pages::find()->where(['id' => '4'])->one(); 
        $this->setMeta('' . $pages->title, $pages->description);           
        return $this->render('page', compact('pages'));
    }


   
     public function actionVorota()
    {
       $pages = Pages::find()->where(['id' => '10'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionOpissismonit()
    {
       $pages = Pages::find()->where(['id' => '12'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    
     public function actionGsmrozetka()
    {
       $pages = Pages::find()->where(['id' => '11'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionGsmnabltransp()
    {
       $pages = Pages::find()->where(['id' => '9'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
        public function actionTarif()
    {
       $pages = Pages::find()->where(['id' => '5'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionGpstrekery()
    {
       $pages = Pages::find()->where(['id' => '8'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionKontroltopliva()
    {
       $pages = Pages::find()->where(['id' => '7'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
      public function actionMontransporta()
    {
       $pages = Pages::find()->where(['id' => '6'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
	  
	  public function actionKontrprobeg()
    {
       $pages = Pages::find()->where(['id' => '13'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }

	 public function actionRegistration()
    {
        return $this->render('registration');
    }
	
		public function actionUsefulinformation()
    {
        $pages = Pages::find()->where(['id' => '1'])->one(); 
        $this->setMeta('' . $pages->title, $pages->description);           
        return $this->render('page', compact('pages'));
    }
    
    public function actionDelivery()
    {
       $pages = Pages::find()->where(['id' => '3'])->one(); 
        $this->setMeta('' . $pages->title, $pages->description);           
        return $this->render('page', compact('pages'));
    }
    
	public function actionCollaboration()
    {
       $pages = Pages::find()->where(['id' => '2'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
	
	
	
	public function actionKontrspeed()
    {
       $pages = Pages::find()->where(['id' => '14'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionKontrpozith()
    {
       $pages = Pages::find()->where(['id' => '15'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionBlockmotor()
    {
       $pages = Pages::find()->where(['id' => '16'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    public function actionGpsmayak()
    {
       $pages = Pages::find()->where(['id' => '17'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
    
    public function actionOpissiskontr()
    {
       $pages = Pages::find()->where(['id' => '18'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
	
	public function actionPrivacypolicy()
    {
       $pages = Pages::find()->where(['id' => '19'])->one(); 
       $this->setMeta('' . $pages->title, $pages->description);           
       return $this->render('page', compact('pages'));
    }
	public function actionCatalogue()
    {
        return $this->render('catalogue');
    }
}
