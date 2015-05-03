<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clw_slugs".
 *
 * @property integer $id_slug
 * @property string $slug
 * @property string $controller
 * @property string $action
 * @property string $controller_action
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
            [['slug', 'controller', 'action', 'controller_action'], 'required'],
            [['slug', 'controller_action'], 'string'],
            [['controller', 'action'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_slug' => Yii::t('app', 'Id Slug'),
            'slug' => Yii::t('app', 'Slug'),
            'controller' => Yii::t('app', 'Controller'),
            'action' => Yii::t('app', 'Action'),
            'controller_action' => Yii::t('app', 'Controller Action'),
        ];
    }
}
