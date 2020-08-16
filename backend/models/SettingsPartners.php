<?php


namespace backend\models;


use yii\db\ActiveRecord;

class SettingsPartners extends ActiveRecord
{
    public static function tableName()
    {
        return 'settings_partners';
    }

    public function rules()
    {
        return [
            [['name','logo'], 'required']
        ];
    }
}