<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class SettingsImages
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $about_us_image [varchar(255)]
 * @property string $our_service_1 [varchar(255)]
 * @property string $our_service_2 [varchar(255)]
 * @property string $our_service_3 [varchar(255)]
 * @property string $comment_section_image [varchar(255)]
 */

class SettingsImages extends ActiveRecord
{
    public static function tableName()
    {
        return 'settings_images';
    }
    public function rules()
    {
        return [
            [[
                'about_us_image', 'our_service_1', 'our_service_2',
                'our_service_3', 'comment_section_image'
                ], 'required']
        ];
    }
}