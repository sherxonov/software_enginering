<?php


namespace frontend\widgets;


use common\models\Event;


class Events extends \yii\base\Widget
{
    public $limit = 3;

    public function run()
    {
        $events = Event::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('events',
            [
                'events' => $events,
            ]
        );
    }
}