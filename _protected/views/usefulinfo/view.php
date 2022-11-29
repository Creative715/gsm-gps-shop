<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="row">
	<div class="col-md-12">
	     <h1><?= Html::encode($this->title) ?></h1>
    <?=$usefulinfo->content?>
    
    </div>
    </div>
</div>



