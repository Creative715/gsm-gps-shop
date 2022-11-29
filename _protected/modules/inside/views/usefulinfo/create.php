<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\inside\models\Usefulinfo */

$this->title = 'Create Usefulinfo';
$this->params['breadcrumbs'][] = ['label' => 'Usefulinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefulinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
