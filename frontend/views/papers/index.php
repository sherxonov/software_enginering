<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Papers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="papers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Papers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'author',
            'jounal',
            'publish_date',
            //'filepath',
            //'created_id',
            //'update_id',
            //'type',
            //'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
