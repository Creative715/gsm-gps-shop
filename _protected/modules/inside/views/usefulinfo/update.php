<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\inside\models\Usefulinfo */

$this->title = 'Update Usefulinfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Usefulinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usefulinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
