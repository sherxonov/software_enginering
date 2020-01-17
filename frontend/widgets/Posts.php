<?php


namespace frontend\widgets;



use common\models\Post;

class Posts extends \yii\base\Widget{
        public $limit  = 4;
        public function run()
        {
                $posts = Post::find()->limit($this->limit)->all();
                return $this ->render('posts',[
                    'posts' => $posts
                ]);
        }


}