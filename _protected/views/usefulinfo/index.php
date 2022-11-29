<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Полезная информация';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Полезная информация: все, что может быть интересно по gps трекерам и gsm технологиям.',
    ]);
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container">
	<div class="row">

	<div class="col-md-12">
	    <h1><?= Html::encode($this->title) ?></h1>
<?php if (!empty($usefulinfo)): ?>
    <?php foreach ($usefulinfo as $usefulinfo): ?>

                <h3><a href="<?=  yii\helpers\Url::to(['usefulinfo/view', 'alias' => $usefulinfo->alias])?>"><?=$usefulinfo->title?></a></h3>
<br/><br/><br/>
<hr/>

                <?=$usefulinfo->description?>
                <br/><br/><br/>
    <?php endforeach; ?>
<?php endif; ?>
            </div>
        </div>
        </div>
      
