<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form ActiveForm */
?>
<div class="clients-index">

    <?php $form = ActiveForm::begin(); ?>
<?php 
 $params = ['prompt' => 'Выберете город'];

       echo $form->field($model, 'citycode')->dropDownList($items_city,$params);  
?>
        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'middlename') ?>
        <?= $form->field($model, 'birthday')
            -> widget(\yii\widgets\MaskedInput::className(), ['mask' => '99/99/9999',]); ?>
        <?= $form->field($model, 'tel') 
            -> widget(\yii\widgets\MaskedInput::className(), ['mask' => '+7 (999) 999 99 99',])?>
        <?= $form->field($model, 'email') ?>
    <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- clients-index -->
