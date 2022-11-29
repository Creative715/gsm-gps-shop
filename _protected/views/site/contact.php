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
<div class="contact">
	<div class="container">
	<div class="breadcrumb"><a href="/">Главная</a> - Контакты</div>
<div class="row">
<div class="col-md-2 col-sm-3 col-xs-12">
<h3>Контакты</h3>
</div>
<div class="col-md-10 col-sm-9 col-xs-12">
<div class="hr_orange"></div>
</div>
</div>
	<div class="row">
	<div class="col-md-8">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.3085837502676!2d30.50892941573082!3d50.435352579473225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cefca143d1b7%3A0x437700f73d5f8198!2zNDNCLCDQstGD0LsuINCh0LDQutGB0LDQs9Cw0L3RgdGM0LrQvtCz0L4sIDQz0JEsINCa0LjRl9Cy!5e0!3m2!1suk!2sua!4v1460982806277" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-md-4">
	<p><i class="fa fa-phone orange" aria-hidden="true"></i> +38(067)489-60-16</p>
	<p><i class="fa fa-phone orange" aria-hidden="true"></i> +38(066)202-12-73</p>
	<p><i class="fa fa-envelope-open-o orange" aria-hidden="true"></i> gsmgps.com@gmail.com</p>
	<p><i class="fa fa-map-marker orange" aria-hidden="true"></i> Украина, г.Киев, ул.Саксаганского,
д. 43б (во дворе), офис 5, (комната 2)</p>
	<p><i class="fa fa-clock-o orange" aria-hidden="true"></i> с 9:30 до 18:00 (выходные: СБ, ВС).</p>
	<p class="text-muted">Перед выездом в офис 
созвониться по телефону.</p>
	</div>
	</div>
		<div class="row">
<div class="col-md-3 col-sm-6 col-xs-6">
	<h3>Напишите нам</h3>
</div>
<div class="col-md-9 col-sm-6 col-xs-6">
<div class="hr_orange"></div>
</div>
</div>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<form>
    <input type="text" class="form-control" name="firstname" placeholder="Имя" class="col-md-12"><br>
    <input type="email" class="form-control" name="email" placeholder="E-mail"  class="col-md-12"><br>
	 <textarea type="text" class="form-control" cols="40" name="massage" placeholder="Сообщение" rows="5" class="col-md-12"></textarea>
	 <br><br>
     <input type="submit" value="Отправить" class="btn btn-success btn-block">
    <div class="clearfix"></div>
    </form>
	</div>
	<div class="col-md-2"></div>
	</div>
	</div>
	</div>