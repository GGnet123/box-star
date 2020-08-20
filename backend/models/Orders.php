<?php


namespace backend\models;


use yii\db\ActiveRecord;
use yii\swiftmailer\Mailer;

/**
 * Class Orders
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $client_name [varchar(255)]
 * @property string $client_phone [varchar(255)]
 * @property int $move_type_id [int(11)]
 * @property int $move_size_id [int(11)]
 * @property int $origin_city_id [int(11)]
 * @property int $destination_city_id [int(11)]
 * @property string $move_date [varchar(255)]
 * @property MoveTypes moveType
 * @property MoveSizes moveSize
 * @property Cities destinationCity
 * @property Cities originCity
 * @property int $rooms_number_id [int(11)]
 */

class Orders extends ActiveRecord
{

    public static $rooms = [
        1 => '1 Bedrooms',
        2 => '2 Bedrooms',
        3 => '3 Bedrooms',
        4 => '4+ Bedrooms'
    ];
    public static function tableName()
    {
        return 'orders'; // TODO: Change the autogenerated stub
    }

    public function rules()
    {
        return [
            [
                [
                    'client_name', 'client_phone', 'move_date'
                ], 'string'
            ],
            [
                [
                    'client_phone', 'move_type_id', 'move_size_id', 'origin_city_id',
                    'destination_city_id', 'move_date'
                ], 'required', 'message' => ''
            ],
            [
                [
                    'id'
                ], 'safe'
            ],
            [
                [
                    'move_type_id', 'move_size_id', 'origin_city_id',
                    'destination_city_id', 'rooms_number_id'
                ], 'integer'
            ]
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        if ($insert) {
            \Yii::$app->mailer->compose()
                ->setFrom('sales@boxstarmovers.com')
                ->setTo('kobecan228@gmail.com')
                ->setSubject('Box-Star Delivery Service')
                ->setTextBody('New order on website');
        }
        parent::afterSave($insert, $changedAttributes);
    }

    public function attributeLabels()
    {
        return [
            'move_type_id' => 'Move type',
            'move_size_id' => 'Move size',
            'destination_city_id' => 'Destination city',
            'origin_city_id' => 'Origin city',
        ];
    }

    public function getMoveType() {
        return $this->hasOne(MoveTypes::class, ['id' => 'move_type_id'])->one();
    }

    public function getMoveSize() {
        return $this->hasOne(MoveSizes::class, ['id' => 'move_size_id']);
    }

    public function getDestinationCity() {
        return $this->hasOne(Cities::class, ['id' => 'destination_city_id']);
    }

    public function getOriginCity() {
        return $this->hasOne(Cities::class, ['id' => 'origin_city_id']);
    }
}