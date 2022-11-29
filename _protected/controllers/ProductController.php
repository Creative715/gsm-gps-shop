<?php



namespace app\controllers;

use app\models\Category;

use app\models\Product;

use Yii;



class ProductController extends AppController{



    public function actionView(){

        $alias = \Yii::$app->request->get('alias');

        $product = Product::findOne(['alias' => $alias]);

		if(empty($product))

        throw new \yii\web\HttpException(404, 'Такого товара нет');

        $this->setMeta($product->name. '', $product->description);

        return $this->render('view', compact('product'));

    }



} 