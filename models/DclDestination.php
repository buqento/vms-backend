<?php

namespace app\models;

use Yii;

class DclDestination extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'dcl_destination';
    }

    public function rules()
    {
        return [
            [['company_name', 'open_hour', 'close_hour', 'phone', 'email', 'profile', 'picture', 'address'], 'required'],
            [['open_hour', 'close_hour'], 'safe'],
            [['profile', 'address'], 'string'],
            [['company_name'], 'string', 'max' => 100],
            [['email'], 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Nama Tenant',
            'open_hour' => 'Jam Buka',
            'close_hour' => 'Jam Tutup',
            'phone' => 'Telepon',
            'email' => 'Email',
            'profile' => 'Profil Tenant',
            'picture' => 'Foto Profil',
            'address' => 'Alamat',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->picture->saveAs('images/' . $this->picture->baseName . '.' . $this->picture->extension);
            return true;
        } else {
            return false;
        }
    }

    public static function getTenants()
    {
        return self::find()
            ->select(['company_name', 'id'])
            ->indexBy('id')
            ->column();
    }

}
