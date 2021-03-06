<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mzee */

$this->title = Yii::t('app', 'Marekebisho ya mzee : ', [
    'modelClass' => 'Mzee',
]) . $model->majina_mwanzo .' '. $model->jina_babu;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wazee'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->majina_mwanzo .' '. $model->jina_babu, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mzee-update">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> ZUPS - FOMU YA USAJILI WA MZEE</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-user"></i> Mzee Mpya'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-th-list"></i> Orodha ya Wazee'), ['index'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

    <?= $this->render('_formUpdate', [
        'model' => $model,
    ]) ?>

</div>
