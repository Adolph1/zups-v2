<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Magonjwa */

$this->title = Yii::t('app', 'Ugonjwa Mpya');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Magonjwa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="magonjwa-create">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - UGONJWA MPYA</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-file"></i> Ugonjwa Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Magonjwa'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
