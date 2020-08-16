<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SettingsImages;

/**
 * SettingsImagesSearch represents the model behind the search form of `backend\models\SettingsImages`.
 */
class SettingsImagesSearch extends SettingsImages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['about_us_image', 'our_service_1', 'our_service_2', 'our_service_3', 'comment_section_image'], 'safe'],
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
        $query = SettingsImages::find();

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

        $query->andFilterWhere(['like', 'about_us_image', $this->about_us_image])
            ->andFilterWhere(['like', 'our_service_1', $this->our_service_1])
            ->andFilterWhere(['like', 'our_service_2', $this->our_service_2])
            ->andFilterWhere(['like', 'our_service_3', $this->our_service_3])
            ->andFilterWhere(['like', 'comment_section_image', $this->comment_section_image]);

        return $dataProvider;
    }
}
