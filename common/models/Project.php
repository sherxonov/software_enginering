<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $title
 * @property string $full_desk
 * @property string $short_desk
 * @property string $lang
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'full_desk', 'short_desk', 'lang'], 'required'],
            [['lang'], 'string'],
            [['title', 'full_desk', 'short_desk'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'full_desk' => 'To\'liq malumot',
            'short_desk' => 'Qisqa malumot',
            'lang' => 'Til',
        ];
    }
}
