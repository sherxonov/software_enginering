<?php

namespace frontend\widgets;

use common\models\Teacher;

class Teachers extends \yii\base\Widget
{

    public $limit = 3;

    public function run()
    {
        $teachers = Teacher::find()->limit($this->limit)->all();
        return $this->render('teachers',
            [
                'teachers' => $teachers,
            ]
            );
    }

}