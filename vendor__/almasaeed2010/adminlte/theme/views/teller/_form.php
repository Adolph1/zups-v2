<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Teller */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div id="loader1" style="display: none"></div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php
        // Normal select with ActiveForm & model
        echo $form->field($model, 'cashier_id')->widget(Select2::classname(), [
            'data' => \backend\models\Teller::getCashiers(),
            'language' => 'en',
            'options' => ['placeholder' => 'Chagua cashier ...','id' => 'cashier-id'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

        ?>


    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?= $form->field($model, 'trn_type')->dropDownList(\backend\models\Teller::getArrayStatus(),['prompt' => '--chagua aina--'])?>

    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <?php
        // Normal select with ActiveForm & model
        echo $form->field($model, 'pay_point_id')->widget(Select2::classname(), [
            'data' => \backend\models\Vituo::getAll(),
            'language' => 'en',
            'options' => ['placeholder' => 'Chagua kituo ...','id' => 'kituo-id'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

        ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <?= $form->field($model, 'kituo_balance')->textInput(['maxlength' => 200,'readonly'=>'readonly']) ?>
    </div>
</div>
</div>
<div class="panel-body">
    <div id="loader1" style="display: none"></div>
    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'product')->dropDownList(\backend\models\Product::getAll(),['prompt'=>Yii::t('app','--chagua--')]) ?>

        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'reference')->textInput(['maxlength' => 200,'readonly'=>'readonly']) ?>
        </div>
    </div>
    <div class="row">


        <div class="col-md-8">
            <?= $form->field($model, 'txn_account')->textInput(['maxlength' => true,'readonly'=>'readonly'])?>

        </div>




        <div class="col-md-4">
            <?= $form->field($model, 'amount')->textInput(['maxlength' => true,'readonly' => 'readonly','onblur'=>'jsOffsetamount(this)','onkeyup'=>'jsOffsetamount(this)']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'offset_account')->hiddenInput(['maxlength' => true,'readonly'=>'readonly'])->label(false) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'offset_amount')->hiddenInput(['maxlength' => true,'readonly'=>'readonly'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Submit') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
        </div>




        <?php ActiveForm::end(); ?>
    </div>


    <script>
        function jsOffsetamount(data)
        {
            var amount=document.getElementById('teller-amount').value;


            document.getElementById("teller-offset_amount").value = amount;



        }
    </script>
