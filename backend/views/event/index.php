<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">


    <p>
        <?= Html::a('Tadbir yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'location',
            'title',
            'description:html',
            'organiser',
            'start_time',
            'end_time',
            'created_id',
            'updated_id',
            'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
