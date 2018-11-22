<?php

namespace app\models;

use Yii;

class DclFloor extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'dcl_floor';
    }

    public function rules()
    {
        return [
            [['name', 'building_id'], 'required'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Lantai',
            'building_id' => 'Nama Gedung'
        ];
    }

    public function getBuilding()
    {
        return $this->hasOne(DclBuilding::className(), ['id' => 'building_id']);
    }

    public static function getFloorList($building_id)
    {
        $floor = self::find()
            ->select(['name', 'id'])
            ->where(['building_id' => $building_id])
            ->asArray()
            ->all();
        return $floor;
    }
}
