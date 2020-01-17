<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $location
 * @property string $title
 * @property string $description
 * @property string $organiser
 * @property string $start_time
 * @property string $end_time
 * @property int $created_id
 * @property int $updated_id
 * @property string $lang
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'title', 'description', 'organiser', 'start_time', 'end_time', 'created_id', 'updated_id', 'lang'], 'required'],
            [['description', 'lang'], 'string'],
            [['start_time', 'end_time'], 'safe'],
            [['created_id', 'updated_id'], 'integer'],
            [['location', 'title'], 'string', 'max' => 250],
            [['organiser'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'title' => 'Title',
            'description' => 'Description',
            'organiser' => 'Organiser',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'created_id' => 'Created ID',
            'updated_id' => 'Updated ID',
            'lang' => 'Lang',
        ];
    }
}
