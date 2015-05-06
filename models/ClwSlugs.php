<?php

namespace cultivonsleweb\yii2\slug\models;

use Yii;

/**
 * This is the model class for table "clw_slugs".
 *
 * @property integer $id_slug
 * @property string $prefix
 * @property string $pattern
 * @property string $route
 * @property string $suffix
 */
class ClwSlugs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clw_slugs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pattern', 'route'], 'required'],
            [['pattern', 'route'], 'string'],
            [['suffix'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_slug' => Yii::t('cultivonsleweb', 'Id Slug'),
            'pattern' => Yii::t('cultivonsleweb', 'Slug'),
            'route' => Yii::t('cultivonsleweb', 'Route'),
            'suffix' => Yii::t('cultivonsleweb', 'Suffix'),
        ];
    }
}
