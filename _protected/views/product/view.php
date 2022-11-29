<?php



/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */



use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

use yii\captcha\Captcha;



?>

	<div class="container">

	<div class="breadcrumb"><a href="/">Главная</a> - <?= $product->name?></div>

<div class="row">

<?php

$mainImg = $product->getImage();

$gallery = $product->getImages();

?>

<div class="col-md-3"><?= Html::img($mainImg->getUrl('208x208'), ['alt' => $product->name, 'title' => $product->name])?>
				<div class="row portfolio">

   <?php  foreach($gallery as $img): ?>
   <?= Html::img($img->getUrl(''), ['class' => 'img-thumbnail col-md-5','alt' => $product->name, 'title' => $product->name])?> 
   <?php endforeach;?>
  </div>
  <div class="clearfix"> </div>

           <?php if($product->new): ?>

				<div class="novelties">

                    <?= Html::img("@web/images/novelties_bg.png", ['alt' => 'Новинка', 'class' => 'new'])?>

					</div>

                <?php endif?>

				

                <?php if($product->sale): ?>

				<div class="action">

                    <?= Html::img("@web/images/action_bg.png", ['alt' => 'Акция', 'class' => 'new'])?>

				</div>

                <?php endif?>

				<div class="clearfix"></div>                         

</div>

<div class="col-md-3 icon_menu">

<?= $product->icon_menu?>


</div>

<div class="col-md-6"><h1><?= $product->name?></h1>

    <div class="alert alert-success fade in">

<ul class="list-inline">

   	<li><h4>Цена:</h4></li> / <li class="text-danger"><del><?= $product->old_price?> грн</del></li> / <li class="price"><?= $product->price?> грн</li>

</ul>

    </div>
    <div class="desc1">
<?= $product->desc1?>
</div>
	<p></p>

<hr>

<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">

 Количество <input class="qty-input form-group" type="number" value="1"/>

</div>

<div class="col-md-3">

 <span class="qty-price"><?= $product->price?> грн</span>

 </div>

 <div class="col-md-3">

<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"  data-id="<?= $product->id?>" class="btn btn-success btn-block add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</a>

</div>

</div>

<br>

<div class="row">
	<div class="col-md-9">
		<div class="social">
				<ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
	</div>
		</div>
	<div class="col-md-3">
	<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"  data-id="<?= $product->id?>" class="btn btn-default add-to-cart">Купить в 1 клик</a>
	</div>

	</div>

	<p></p>

<hr>

<p></p>	

	</div>

	</div>

<div role="tabpanel">



  <ul class="nav nav-tabs" role="tablist">

    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>

    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Характеристики</a></li>

    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Инструкции</a></li>



  </ul>



  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="home"><?= $product->content?></div>

    <div role="tabpanel" class="tab-pane" id="profile"><?= $product->haracteristika?></div>

    <div role="tabpanel" class="tab-pane" id="messages"><?= $product->instruction?></div>

  </div>



</div>
<br/><br/><br/><br/>
<div class="row">

	<div class="col-md-5 functions">
	<h3 class="text-left">Функциональные возможности <?= $product->name?></h3>
	<div class="row">
    <?= $product->funck?>
	</div>
	</div>
	<div class="col-md-5 col-md-offset-1">
		<h3 class="text-left">Технические характеристики <?= $product->name?></h3>
	<br/><br/><br/><br/><br/><br/>
	<div class="tech_list">
<?= $product->tech?>
</div>
	</div>

	</div>
		<p>&nbsp;</p>
<div class="row">

	<div class="col-md-5">
	<h3 class="text-left">Особенности <?= $product->name?></h3>
	<br/><br/><br/><br/><br/>
	<div class="tech_list">
<?= $product->features?>
</div>
	</div>
	<div class="col-md-5 col-md-offset-1">
		<h3 class="text-left">Фото/Видеобзор <?= $product->name?></h3>
	<br/><br/><br/><br/><br/>
	<div class="tech_list">
	<?= $product->video?>
</div>
	</div>
<div class="col-md-12">
	<h3>Полезная информация</h3>
	<br/><br/><br/><br/><br/>
<div class="accordion" id="accordion" id="product-qa">
						<div class="accordion-group">
							<div class="accordion-heading">
							<h4 class="panel-title">
								<a href="#collapse-1" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">GPS трекер или GPS маяк?</a>
								</h4>
							</div>
							
							<div class="accordion-body collapse" id="collapse-1">
								<div class="accordion-inner">
								<div class="panel-body">
									<?= $product->method?>
									</div>
								</div>
							</div>
						</div>
			
						<div class="accordion-group">
							<div class="accordion-heading">
							<h4 class="panel-title">
								<a href="#collapse-2" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Спецпредложение для монтажников</a>
								</h4>
							</div>
							
							<div class="accordion-body collapse" id="collapse-2">
								<div class="accordion-inner">
									
									<div class="panel-body">
									<?= $product->suggestion?>
									</div>
								</div>
							</div>
						</div>
			
						<div class="accordion-group">
							<div class="accordion-heading">
							<h4 class="panel-title">
								<a href="#collapse-3" data-parent="#product-qa" data-toggle="collapse" class="accordion-toggle">Точность контроля километража и топлива</a>
								</h4>
							</div>
							
							<div class="accordion-body collapse" id="collapse-3">
								<div class="accordion-inner">
								<div class="panel-body">
									<?= $product->exactness?>
									</div>
								</div>
							</div>
						</div>
					</div>


</div>
	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
<p><hr></p>
	</div>