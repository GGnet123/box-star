<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class SettingsServices
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $title [varchar(255)]
 * @property string $content
 */

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