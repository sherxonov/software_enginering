<?php


namespace frontend\widgets;



use frontend\models\Event;

class AllEvents extends \yii\base\Widget
{
    public function run()
    {
        $all_events = Event::find()->limit($this->limit)->all();
        return $this->render(
          'all_events',[
              'all_events'=>$all_events,
            ]
        );
    }
}