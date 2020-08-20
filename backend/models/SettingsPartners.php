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
            [['name'], 'required'],
            [['logo'], 'safe']
        ];
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->logo = \Yii::$app->session->get(\Yii::$app->session->id);
        } else {
            $partner = SettingsPartners::findOne($this->id);
            $path = \Yii::getAlias('@frontend') . '/web/assets/images/logos' . $partner->logo;
            if (file_exists($path)) {
                unlink($path);
            }
            $this->logo = \Yii::$app->session->get(\Yii::$app->session->id);
        }
        return parent::beforeSave($insert);
    }
}