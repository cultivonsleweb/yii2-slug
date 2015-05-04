<?php

namespace cultivonsleweb\yii2\slug\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

/**
 * SlugSearch represents the model behind the search form about `cultivonsleweb\yii2\slug\models\ClwSlugs`.
 */
class SlugSearch extends ClwSlugs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_slug'], 'integer'],
            [['pattern', 'route', 'suffix', 'defaults'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ClwSlugs::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_slug' => $this->id_slug,
        ]);

        $query->andFilterWhere(['like', 'pattern', $this->pattern])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'suffix', $this->suffix])
            ->andFilterWhere(['like', 'defaults', $this->defaults]);

        return $dataProvider;
    }
}
