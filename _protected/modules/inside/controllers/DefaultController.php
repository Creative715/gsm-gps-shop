<?php

namespace app\modules\inside\controllers;

use yii\web\Controller;

/**
 * Default controller for the `inside` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
