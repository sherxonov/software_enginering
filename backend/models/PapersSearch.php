<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Papers;

/**
 * PapersSearch represents the model behind the search form of `common\models\Papers`.
 */
class PapersSearch extends Papers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_id', 'update_id'], 'integer'],
            [['title', 'author', 'jounal', 'publish_date', 'filepath', 'type', 'lang'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Papers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'publish_date' => $this->publish_date,
            'created_id' => $this->created_id,
            'update_id' => $this->update_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'jounal', $this->jounal])
            ->andFilterWhere(['like', 'filepath', $this->filepath])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'lang', $this->lang]);

        return $dataProvider;
    }
}
