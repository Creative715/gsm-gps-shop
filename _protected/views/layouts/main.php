<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ScriptsAppAsset;

AppAsset::register($this);
ScriptsAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
	<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
  <?php $this->beginBody() ?>
         <div id="myModal" class="modal fade" role="dialog">
  	 <div class="modal-dialog">

    <div class="modal-content">
     <div class="modal-header">
     <button class="close" data-dismiss="modal">×</button>
			<h4 class="text-center">Заказать обратный звонок</h4>
        </div> 
     <form data-toggle="validator" method="post" action="phone.php">
     <div class="modal-body">
         <div class="form-group row">
   <div class="col-md-12"><input name="name" type="text" class="form-control" id="name" placeholder="Ваше имя:"  required=""/>
   <span class="glyphicon form-control-feedback" aria-hidden="true"></span></div>
    </div>
    <div class="form-group row">
   <div class="col-md-12"><input name="tel" type="text" class="form-control" id="tel"  placeholder="Номер телефона:" required=""/>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span></div>
     </div>
     <div class="modal-footer row">
      <button type="submit" class="btn btn-success col-md-12 col-sm-12 col-xs-12">Отправить</button>
      </div>
    </div>
        </form>
          </div>
	</div>
	</div>
       <div id="myModal1" class="modal fade" role="dialog">
  	 <div class="modal-dialog">

    <div class="modal-content">
     <div class="modal-header">
     <button class="close" data-dismiss="modal">×</button>
			<h4 class="text-center">Вход в систему мониторинга</h4>
        </div> 
     <form data-toggle="validator" method="post" action="phone.php">
     <div class="modal-body">
         
     <a href="http://server2.gsm-gps.com/" rel="nofollow" class="btn btn-success btn-block">Система мониторинг транспорта V2.0</a><br/>
     <a href="https://gsmgps.systems" rel="nofollow" class="btn btn-success btn-block">Система мониторинг транспорта V3.0(NEW)</a>

     <div class="modal-footer row">
      </div>
    </div>
        </form>
          </div>
	</div>
	</div>
	       <div id="myModal2" class="modal fade" role="dialog">
  	 <div class="modal-dialog">

    <div class="modal-content">
     <div class="modal-header">
     <button class="close" data-dismiss="modal">×</button>
			<h4 class="text-center">Забыли пароль?</h4>
			<p class="text-center">Новый пароль будет отправлен на Ваш E-mail</p>
        </div> 
     <form data-toggle="validator" method="post" action="phone.php">
     <div class="modal-body">
         <div class="form-group row">
   <div class="col-md-12"><input name="name" type="email" class="form-control" id="name" placeholder="Введите свой E-mail"  required=""/>
   <span class="glyphicon form-control-feedback" aria-hidden="true"></span></div>
    </div>
     <div class="modal-footer row">
      <button type="submit" class="btn btn-success col-md-12 col-sm-12 col-xs-12">Отправить</button>
      </div>
    </div>
        </form>
          </div>
	</div>
	</div>
	<div id="top"></div>
    <div class="panel panel-default">
	<div class="container">
	<div class="row">
	<div class="col-md-8">
	<div class="social">
				<ul>
					<li><a target="_blank" rel="nofollow" href="https://ru-ru.facebook.com/people/%D0%A1%D0%BF%D1%83%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5-%D0%9F%D1%80%D0%BE%D1%82%D0%B8%D0%B2%D0%BE%D1%83%D0%B3%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5-%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B/100004688503228"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
	</div>
				<ul class="list-inline top">
					<li><a href="/usefulinfo.html">Полезная информация</a></li>
					<li><a href="/delivery.html">Доставка и оплата</a></li>
					<li><a href="/collaboration.html">Сотрудничество</a></li>
					<li><a href="/contact.html">Контакты</a></li>  					
				</ul>
	</div>
	<div class="col-md-2">
	<a data-toggle="modal" href="#myModal1" class="btn btn-success btn-block mon" href="#">Мониторинг</a>
	</div>
		<div class="col-md-2">
		<div class="social pull-right">
	<ul>
					<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                </ul>
	</div>
	</div>
    </div>
	</div>
	</div>
<header>
<div class="container">
	<div class="row">
		<div class="col-md-2 hidden-xs">
		<a href="/"><img src="/images/logo.png" class="img-responsive wow flip" alt="GPS трекеры" title="GPS трекеры"></a>
		</div>
	<div class="col-md-6 phones">
	<i class="fa fa-phone" aria-hidden="true"></i> +38(067) 489-60-16 | <i class="fa fa-phone" aria-hidden="true"></i> +38(066) 202-12-73
	</div>

		<div class="col-md-3 reqwest">
	<a data-toggle="modal" href="#myModal" class="btn btn-success btn-block mon" href="#">Заказать звонок</a>
	</div>
		<div class="col-md-1 cart_top">
<a href="/cart/view"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>                
		</div>
		</div>
		</div>
</header>	
<nav class="navbar navbar-default wow fadeInUp"  data-spy="affix" data-offset-top="197">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Главная</a></li>
        <li>
       <a href="#" data-toggle="dropdown" class="dropdown-toggle">Система мониторинга транспорта <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a title="Описание системы мониторинга транспорта" href="/opissismonit.html">Описание системы мониторинга транспорта</a></li>
			<li><a title="GPS мониторинг транспорта" href="/montransporta.html">GPS мониторинг транспорта</a></li>
			<li><a title="Контроль топлива" href="/kontroltopliva.html">- Контроль топлива</a></li>
            <li><a title="Контроль пробега" href="/kontrprobeg.html">- Контроль пробега</a></li>
            <li><a title="Контроль скорости" href="/kontrspeed.html">- Контроль скорости</a></li>
			<li><a title="Контроль местоположения" href="/kontrpozith.html">- Контроль местоположения</a></li>
            <li><a title="Блокировка двигателя" href="/blockmotor.html">- Блокировка двигателя</a></li>
			<li><a title="GPS трекеры" href="/gpstrekery.html">GPS трекер</a></li>
            <li><a title="GPS маяки (закладки, маркеры)" href="/gpsmayak.html">GPS маяки (закладки, маркеры)</a></li>
            
        </ul>
        </li>
		<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Система "Умный дом"<b class="caret"></b></a>
		<ul class="dropdown-menu">
            <li><a title="Система контроля и управления удаленными объектами" href="/opissiskontr.html">Описание системы"Умный дом"</a></li>
			<li><a title="Gsm розетки" href="/gsmrozetka.html">- Gsm розетки</a></li>
            <li><a title="Gsm сигнализации" href="/vorota.html">- Управление воротами</a></li>
			<li><a title="Система наблюдения за транспортом" href="/gsmnabltransp.html">- Контроль температуры</a></li>
        </ul>
		</li>
		<li><a href="/category/catalogue.html">Оборудование</a></li>
		<li><a href="/tarif.html">Тарифы и услуги</a></li>
      </ul>
    </div>
  </div>
</nav>

<?= $content; ?>

<footer>
<div class="call"><a data-toggle="modal" href="#myModal"><img class="img-responsive" src="/images/call_bg.png" alt="Заказать звонок" title="Заказать звонок"/></a></div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-6"><img src="/images/logo.png" class="img-responsive" alt="GPS трекер" title="GPS трекер"></div>
<div class="col-md-3 col-sm-6 col-xs-6"><ul class="list-unstyled"><li><a href="/montransporta.html">Система мониторинга  транспорта</a></li><li><a href="/opissiskontr.html">Система удаленного контроля</a></li><li><a href="/category/catalogue.html">Оборудование</a></li><li><a href="/tarif.html">Тарифы и услуги</a></li></ul></div>
<div class="col-md-3 col-sm-6 col-xs-6"><ul class="list-unstyled"><li><a href="/usefulinfo.html">Полезная информация</a></li><li><a href="/delivery.html">Доставка и оплата</a></li><li><a href="/collaboration.html">Сотрудничество</a></li><li><a href="/contact.html">Контакты</a></li> </ul></div>
<div class="col-md-3 col-sm-6 col-xs-6 text-center">
<p>+38(067) 489-60-16 </p>
<p>+38(066) 202-12-73 </p>
	<div class="social">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
	</div>
	<div class="up"><a href="#top" class="topp"><img src="/images/top_bg.png" alt="Вверх" title="Вверх"/></a></div>
</div>
</div>
</div>
</footer>
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '
	<div class="row">
	<div class="col-md-4"><button type="button" class="btn btn-warning" data-dismiss="modal">Продолжить покупки</button></div>
	<div class="col-md-4"><a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a></div>
	<div class="col-md-4"><button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button></div>
	</div>
	'
]);

\yii\bootstrap\Modal::end();
?>
	<?php $this->endBody() ?>
	<script>
	jQuery('ul.nav > li').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
	}, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
	})
	</script>
  </body>
</html>
<?php $this->endPage() ?>