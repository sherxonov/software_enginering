<?php


namespace frontend\widgets;




use common\models\Project;

class Projects extends \yii\base\Widget
{

    public $limit = 4;
    public function run()
    {
        $projects = Project::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('projects',
            [
                'projects'=>$projects
            ]);
    }
}