<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class MoveSizes
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $title [varchar(255)]
 * @property bool $with_rooms [tinyint(1)]
 */

class MoveSizes extends ActiveRecord
{
    public function rules()
    {
        return [
            [
                [
                    'title'
                ], 'string'
            ],
            [
                [
                    'title'
                ], 'required'
            ],
            [
                [
                    'id', 'with_rooms'
                ], 'safe'
            ]
        ];
    }

    public static function tableName()
    {
        return 'move_sizes'; // TODO: Change the autogenerated stub
    }
}