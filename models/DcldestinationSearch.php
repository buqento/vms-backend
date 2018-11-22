<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dcldestination;

class DcldestinationSearch extends Dcldestination
{
    public function rules()
    {
        return [
            [['id', 'phone'], 'integer'],
            [['company_name', 'open_hour', 'close_hour', 'email', 'profile', 'picture', 'address'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Dcldestination::find();

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
            'phone' => $this->phone,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'profile', $this->profile])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
