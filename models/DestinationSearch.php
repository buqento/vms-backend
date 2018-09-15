<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Destination;

/**
 * DestinationSearch represents the model behind the search form of `app\models\Destination`.
 */
class DestinationSearch extends Destination
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'floor', 'phone'], 'integer'],
            [['company_name', 'open_hour', 'close_hour', 'build_name', 'email', 'profile', 'picture'], 'safe'],
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
        $query = Destination::find();

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
            'open_hour' => $this->open_hour,
            'close_hour' => $this->close_hour,
            'floor' => $this->floor,
            'phone' => $this->phone,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'build_name', $this->build_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'profile', $this->profile])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}