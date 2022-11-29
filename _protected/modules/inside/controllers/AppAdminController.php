<?php





namespace app\modules\inside\controllers;

use yii\web\Controller;

use yii\filters\AccessControl;







class AppAdminController extends Controller{



public function behaviors(){

        return [

            'access' => [

                'class' => AccessControl::className(),

                'rules' => [

                    [

                        'allow' => true,

                        'roles' => ['@']

                    ]

                ]

            ]

        ];

    }



} 