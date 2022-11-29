<?php



use yii\helpers\Html;

use yii\widgets\ActiveForm;

use mihaildev\ckeditor\CKEditor;

use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);



/* @var $this yii\web\View */

/* @var $model app\modules\admin\models\Product */

/* @var $form yii\widgets\ActiveForm */

?>



<div class="product-form">



   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?php

    echo $form->field($model, 'content')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>

	 <?php

    echo $form->field($model, 'icon_menu')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>

	<?php

    echo $form->field($model, 'haracteristika')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>

   <?php

    echo $form->field($model, 'instruction')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    
        <?php

    echo $form->field($model, 'tech')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    
        <?php

    echo $form->field($model, 'funck')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    
            <?php

    echo $form->field($model, 'features')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>

            <?php

    echo $form->field($model, 'video')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    
    <?php

    echo $form->field($model, 'desc1')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    
    <?php

    echo $form->field($model, 'method')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    <?php

    echo $form->field($model, 'suggestion')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>
    <?php

    echo $form->field($model, 'exactness')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [])

    ]);

    ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

	

    <?= $form->field($model, 'price')->textInput() ?>



    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'description')->textInput(['maxlength' => false]) ?>



    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'image')->fileInput() ?>

    

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    

    <?= $form->field($model, 'hit')->checkbox([ '0', '1', ]) ?>



    <?= $form->field($model, 'new')->checkbox([ '0', '1', ]) ?>



    <?= $form->field($model, 'sale')->checkbox([ '0', '1', ]) ?>



    <div class="form-group">

        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>



    <?php ActiveForm::end(); ?>



</div>

