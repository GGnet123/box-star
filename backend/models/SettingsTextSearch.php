<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SettingsText;

/**
 * SettingsTextSearch represents the model behind the search form of `backend\models\SettingsText`.
 * @property int $id [int(11)]
 * @property string $call_us_number [varchar(255)]
 * @property string $about_us
 * @property string $one_tick_header [varchar(255)]
 * @property string $one_tick_content
 * @property string $two_tick_header [varchar(255)]
 * @property string $two_tick_content
 * @property string $three_tick_header [varchar(255)]
 * @property string $three_tick_content
 * @property string $four_tick_header [varchar(255)]
 * @property string $four_tick_content
 * @property string $five_tick_header [varchar(255)]
 * @property string $five_tick_content
 * @property string $six_tick_header [varchar(255)]
 * @property string $six_tick_content
 */
class SettingsTextSearch extends SettingsText
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['call_us_number', 'about_us', 'one_tick_header', 'one_tick_content', 'two_tick_header', 'two_tick_content', 'three_tick_header', 'three_tick_content', 'four_tick_header', 'four_tick_content', 'five_tick_header', 'five_tick_content', 'six_tick_header', 'six_tick_content'], 'safe'],
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
        $query = SettingsText::find();

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
        ]);

        $query->andFilterWhere(['like', 'call_us_number', $this->call_us_number])
            ->andFilterWhere(['like', 'about_us', $this->about_us])
            ->andFilterWhere(['like', '1_tick_header', $this->one_tick_header])
            ->andFilterWhere(['like', '1_tick_content', $this->one_tick_content])
            ->andFilterWhere(['like', '2_tick_header', $this->two_tick_header])
            ->andFilterWhere(['like', '2_tick_content', $this->two_tick_content])
            ->andFilterWhere(['like', '3_tick_header', $this->three_tick_header])
            ->andFilterWhere(['like', '3_tick_content', $this->three_tick_content])
            ->andFilterWhere(['like', '4_tick_header', $this->four_tick_header])
            ->andFilterWhere(['like', '4_tick_content', $this->four_tick_content])
            ->andFilterWhere(['like', '5_tick_header', $this->five_tick_header])
            ->andFilterWhere(['like', '5_tick_content', $this->five_tick_content])
            ->andFilterWhere(['like', '6_tick_header', $this->six_tick_header])
            ->andFilterWhere(['like', '6_tick_content', $this->six_tick_content]);

        return $dataProvider;
    }
}
