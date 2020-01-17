<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = 'Tadbirlar yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Tadbirlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
