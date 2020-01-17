<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

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
//            'int',
            'title',
            'keywords',
            'short_desk:html',
            'full_desk:html',
//            'author_id',
//            'created_id',
//            'update_id',
//            'imgage',
            [
                'attribute' => 'image',
                'value' => Html::img('/se.uz/frontend/web'.$model->image, ['style'=>'width: 160px']),
                'format' => 'html'
            ],
            'publish_date',
            'lang',
        ],
    ]) ?>

</div>
