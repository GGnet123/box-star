<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class Comments
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $name [varchar(255)]
 * @property string $comment
 */

class Comments extends ActiveRecord
{
    public static function tableName()
    {
        return 'comments';
    }

    public function rules()
    {
        return [
            [['name', 'comment'], 'required'],
            [['name', 'comment'], 'string']
        ];
    }
}