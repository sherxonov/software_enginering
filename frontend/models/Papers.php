<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "papers".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $jounal
 * @property string $publish_date
 * @property string $filepath
 * @property int $created_id
 * @property int $update_id
 * @property string $type
 * @property string $lang
 */
class Papers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'papers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'jounal', 'publish_date', 'filepath', 'created_id', 'update_id', 'type', 'lang'], 'required'],
            [['publish_date'], 'safe'],
            [['created_id', 'update_id'], 'integer'],
            [['type', 'lang'], 'string'],
            [['title', 'author'], 'string', 'max' => 250],
            [['jounal', 'filepath'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'jounal' => 'Jounal',
            'publish_date' => 'Publish Date',
            'filepath' => 'Filepath',
            'created_id' => 'Created ID',
            'update_id' => 'Update ID',
            'type' => 'Type',
            'lang' => 'Lang',
        ];
    }
}
