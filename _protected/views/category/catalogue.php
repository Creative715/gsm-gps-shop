<?php



/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */



use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

use yii\captcha\Captcha;





$this->title = 'Каталог продукции';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Каталог продукции - gps трекеры, gps маяки, датчики уровня топлива.',
    ]);

$this->params['breadcrumbs'][] = $this->title;



?>

<div class="catalogue">

	<div class="container">

	<div class="breadcrumb"><a href="/">Главная</a> - Каталог продукции</div>

	<div class="row">

	<div class="col-md-3">

	<button class="btn btn-success btn-block"><h5 class="text-left">Категории</h5></button>

    <ul class="list-unstyled">

    	<?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>

	</ul>

<hr/>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>

<hr/>

	</div>

	<div class="col-md-9">

		<div class="row">

	<div class="col-md-3">



	</div>

	<div class="col-md-6 text-center">



    </div>

    <div class="col-md-3">



	</div></div>

	<hr>

	<div class="row">

	<?php if( !empty($products) ): ?>

    <h1 class="title text-center">Каталог продукции</h1>

	<hr>

    <?php foreach($products as $product): ?>

    <?php $mainImg = $product->getImage();?>

    <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="product">

                    <?= Html::img($mainImg->getUrl('208x208'), ['alt' => $product->name, 'title' => $product->name])?>

                    

					<div class="caption">

                    <p><a href="<?= \yii\helpers\Url::to(['product/view', 'alias' => $product->alias]) ?>"><?= $product->name?></a></p>

					</div>

					<hr>

					<p><?= $product->description?></p>

					<hr>

					 <p class="text-danger"><strong><?= $product->price?> грн</strong></p>

                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>"  data-id="<?= $product->id?>" class="btn btn-success btn-block add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</a>

                </div>

                <?php if($product->new): ?>



                    <?= Html::img("@web/images/novelties_bg.png", ['alt' => 'Новинка', 'class' => 'novelties'])?>

	

                <?php endif?>

				

                <?php if($product->sale): ?>



                    <?= Html::img("@web/images/action_bg.png", ['alt' => 'Акция', 'class' => 'action'])?>



                <?php endif?>

				<div class="clearfix"></div>

			<p><hr></p>

    </div>

    <?php endforeach;?>

<?php endif; ?>

 <p></p>

 <p><hr></p>

 <p></p>

</div>

	</div>



	</div>

	</div>

    </div>