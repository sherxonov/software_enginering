<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $int
 * @property string $title
 * @property string $keywords
 * @property string $short_desk
 * @property string $full_desk
 * @property int $author_id
 * @property int $created_id
 * @property int $update_id
 * @property string $image
 * @property string $publish_date
 * @property string $lang
 *
 * @property PostCategory[] $postCategories
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'keywords', 'short_desk', 'full_desk', 'author_id', 'created_id', 'update_id', 'image', 'publish_date', 'lang'], 'required'],
            [['short_desk', 'full_desk', 'lang'], 'string'],
            [['author_id', 'created_id', 'update_id'], 'integer'],
            [['publish_date'], 'safe'],
            [['title', 'keywords', 'image'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'int' => 'Int',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'short_desk' => 'Short Desk',
            'full_desk' => 'Full Desk',
            'author_id' => 'Author ID',
            'created_id' => 'Created ID',
            'update_id' => 'Update ID',
            'image' => 'Image',
            'publish_date' => 'Publish Date',
            'lang' => 'Lang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostCategories()
    {
        return $this->hasMany(PostCategory::className(), ['post_id' => 'int']);
    }
}
