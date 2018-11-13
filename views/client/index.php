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
        <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'iagree_term',[
        'template' => "\n<div class='col-md-6'>{label}"
        . "{input}Принимаю <a href='' >условия банковского соглашения</a>"
        . "</div>\n{hint}\n{error}",
        'labelOptions' => [ 'class' => 'your_custom_class_name','required'=>'required' ]])
        ->checkbox(['value'=>1,'checked' => false])
//        ->checkbox(['value'=>1,'checked' => false, 'required' => true])
         ?>
    <?= $form->field($model, 'iagree_email',[
        'template' => "\n<div class='col-md-6'>{label}"
        . "{input}Соглашаюсь на информирование от банка"
        . "</div>\n{hint}\n{error}",
        'labelOptions' => [ 'class' => 'your_custom_class_name' ]])
        ->checkbox(['value'=>1,'checked' => false])
         ?>
             <?php // $form->field($model, 'iagree_term')->checkbox()-> label('Принимаю условия <a href="javascript:;" title="открыть во всплывающем окне" data-toggle="modal" data-target="#modalUserAgreement">банковского соглашения</a>') ?>
    <?php // $form->field($model, 'iagree_email')->checkbox()
                     //-> label('Соглашаюсь на информирование от банка') ?>
   <!-- <div class="form-group field-creditonefieldform-iagree_term required">
<div class="col-sm-8 col-xs-12 col-sm-offset-2">
<div class="checkbox">
<label for="creditonefieldform-iagree_term">
<input type="hidden" name="CreditOnefieldForm[iagree_term]" value="0">
<input type="checkbox" id="creditonefieldform-iagree_term" 
       name="CreditOnefieldForm[iagree_term]" value="1" checked="">
Принимаю условия <a href="javascript:;" title="открыть во всплывающем окне" data-toggle="modal" data-target="#modalUserAgreement">банковского соглашения</a>
</label>
</div>
<p class="help-block help-block-error "></p>
</div>

</div>
    
    <div class="form-group field-creditonefieldform-iagree_email">
<div class="col-sm-8 col-xs-12 col-sm-offset-2"><div class="checkbox">
        <input type="hidden" name="CreditOnefieldForm[iagree_email]" value="0">
        <input type="checkbox" id="creditonefieldform-iagree_email" name="CreditOnefieldForm[iagree_email]" value="1" checked=""><label for="creditonefieldform-iagree_email">Соглашаюсь на <a href="javascript:;" title="открыть во всплывающем окне" data-toggle="modal" data-target="#modalUserAgreementEmail">информирование от банка</a></label><p class="help-block help-block-error "></p></div></div>
</div>
   -->  
    <div class="form-group">
            <?= Html::submitButton('Получить кредит', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- clients-index -->
