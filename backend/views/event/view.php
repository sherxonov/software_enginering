<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">


    <p>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'O\'chirishni istaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'location',
            'title',
            'description:html',
            'organiser',
//            'start_time',
            [ 'attribute' => 'start_time',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDateTime($model->start_time, 'php:d-M-Y');
                },
            ],
            'end_time',
//            'created_id',
//            'updated_id',
            'lang',
        ],
    ]) ?>

</div>
