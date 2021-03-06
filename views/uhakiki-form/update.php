<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UhakikiForm */

$this->title = 'Update Uhakiki Form: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uhakiki Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uhakiki-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
