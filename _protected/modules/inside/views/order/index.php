<?php



use yii\helpers\Html;

use yii\grid\GridView;



/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Панель управления';

$this->params['breadcrumbs'][] = $this->title;

?>

<div class="order-index">

<h3>Список заказов</h3>

    <p>

        <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,

        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],



            'id',

            'created_at',

            'updated_at',

            'phone',

            'qty',

            'sum',

            [

                'attribute' => 'status',

                'value' => function($data){

                    return !$data->status ? '<span class="text-danger">Активен</span>' : '<span class="text-success">Завершен</span>';

                },

                'format' => 'html',

            ],

//            'status',

            // 'name',

            // 'email:email',

            // 'phone',

            // 'address',



            ['class' => 'yii\grid\ActionColumn'],

        ],

    ]); ?>

</div>

