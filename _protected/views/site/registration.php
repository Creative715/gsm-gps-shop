<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration">
	<div class="container">
	<div class="breadcrumb"><a href="/">Главная</a> - Регистрация</div>
	<div class="row">
<div class="col-md-4 col-sm-5 col-xs-5">
	<h3>РЕГИСТРАЦИЯ НА САЙТЕ</h3>
</div>
<div class="col-md-8 col-sm-7 col-xs-7">
<div class="hr_orange"></div>
</div>
</div>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<form>
    <input type="text" class="form-control" name="firstname" placeholder="Имя" class="col-md-12"><br>
    <input type="text" class="form-control" name="lastname" placeholder="Фамилия"  class="col-md-12"><br>
    <input type="email" class="form-control" name="email" placeholder="E-mail"  class="col-md-12"><br>
    <input type="text" class="form-control" name="username" placeholder="Номер телефона" class="col-md-12"><br><br>
    <input type="submit" value="Зарегистрироваться" class="btn btn-success btn-block">
    <div class="clearfix"></div>
    </form>
	</div>
	<div class="col-md-2"></div>
	</div>
	</div>
</div>