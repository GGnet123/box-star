<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class SettingsText
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $call_us_number [varchar(255)]
 * @property string $about_us
 * @property string $one_tick_header [varchar(255)]
 * @property string $one_tick_content
 * @property string $two_tick_header [varchar(255)]
 * @property string $two_tick_content
 * @property string $three_tick_header [varchar(255)]
 * @property string $three_tick_content
 * @property string $four_tick_header [varchar(255)]
 * @property string $four_tick_content
 * @property string $five_tick_header [varchar(255)]
 * @property string $five_tick_content
 * @property string $six_tick_header [varchar(255)]
 * @property string $six_tick_content
 * @property string $contact_email [varchar(255)]
 * @property string $location [varchar(255)]
 * @property string $business_hours [varchar(255)]
 * @property string $free_estimate_text
 */

class SettingsText extends ActiveRecord
{
    public static function tableName()
    {
        return 'settings_text';
    }
    public function rules()
    {
        return [
            [[
                'call_us_number', 'about_us', 'one_tick_header',
                'two_tick_header', 'three_tick_header', 'four_tick_header',
                'five_tick_header', 'six_tick_header', 'one_tick_content',
                'two_tick_content', 'three_tick_content', 'four_tick_content',
                'five_tick_content', 'six_tick_content', 'contact_email', 'location', 'business_hours',
                'free_estimate_text'
            ], 'required'],
        ];
    }
}