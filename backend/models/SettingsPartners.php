<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class SettingsPartners
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $name [varchar(255)]
 * @property string $logo [varchar(255)]
 */

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