<?php

use yii\db\Migration;

/**
 * Class m200726_072609_add_column_with_rooms_to_move_sizes
 */
class m200726_072609_add_column_with_rooms_to_move_sizes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('move_sizes', 'with_rooms', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('move_sizes', 'with_rooms');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200726_072609_add_column_with_rooms_to_move_sizes cannot be reverted.\n";

        return false;
    }
    */
}
