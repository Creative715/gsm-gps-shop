<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>

<p></br></br></p>
<div class="site-login container">
    <h2 class="text-center"><?= Html::encode($this->title) ?></h2>
<p></br></br></p>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-md-12\">{input}</div>\n<div class=\"col-md-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\" col-md-12\">{input} {label}</div>\n<div class=\"col-md-12\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-md-12">
                <?= Html::submitButton('Login', ['class' => 'btn btn-success btn-block', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
	</div>
                    <div class="col-md-2"></div>
<p></br></br></br></br></br></br></br></p>
<p><hr></p>
<p></br></br></br></br></br></br></br></br></br></br></p>
</div>
