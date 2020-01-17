<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Papers */

$this->title = 'Maqola yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="papers-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
