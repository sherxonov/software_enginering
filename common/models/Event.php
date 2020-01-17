<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'title', 'description', 'organiser', 'start_time', 'end_time',  'lang'], 'required'],
            [['description', 'lang'], 'string'],
            [['start_time', 'end_time'], 'safe'],
            [['created_at', 'updated_at'], 'integer'],
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
            'location' => 'Manzil',
            'title' => 'Sarlavha',
            'description' => 'Tavsifi',
            'organiser' => 'Tashkilotchi',
            'start_time' => 'Boshlangan vaqti',
            'end_time' => 'Tugash vaqti',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'lang' => 'Til',
        ];
    }
//
//    public function getName(){
//        return $this->location." ".$this->title." ".$this->description;
//    }

}
