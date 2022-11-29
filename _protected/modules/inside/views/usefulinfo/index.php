<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\inside\models\UsefulinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usefulinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefulinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usefulinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'description',
            'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
