<?php


namespace backend\models;


use yii\db\ActiveRecord;

class SettingsServices extends ActiveRecord
{
    public static function tableName()
    {
        return 'settings_services';
    }

    public function rules()
    {
        return [
            [['title', 'content'], 'required']
        ];
    }
}