<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Post;

/**
 * PostSearch represents the model behind the search form of `frontend\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['int', 'author_id', 'created_id', 'update_id'], 'integer'],
            [['title', 'keywords', 'short_desk', 'full_desk', 'image', 'publish_date', 'lang'], 'safe'],
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
        $query = Post::find();

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
            'int' => $this->int,
            'author_id' => $this->author_id,
            'created_id' => $this->created_id,
            'update_id' => $this->update_id,
            'publish_date' => $this->publish_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'short_desk', $this->short_desk])
            ->andFilterWhere(['like', 'full_desk', $this->full_desk])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'lang', $this->lang]);

        return $dataProvider;
    }
}
