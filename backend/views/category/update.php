<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = 'Kategoriyalarni tahrirlash: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kategoriyalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
