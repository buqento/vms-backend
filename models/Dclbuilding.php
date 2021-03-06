<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dcl_building".
 *
 * @property int $id
 * @property string $name
 */
class DclBuilding extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dcl_building';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Gedung',
        ];
    }

}
