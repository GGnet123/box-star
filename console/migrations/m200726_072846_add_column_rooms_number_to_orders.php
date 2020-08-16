<?php

use yii\db\Migration;

/**
 * Class m200726_072846_add_column_rooms_number_to_orders
 */
class m200726_072846_add_column_rooms_number_to_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('orders', 'rooms_number_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('orders', 'rooms_number_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200726_072846_add_column_rooms_number_to_orders cannot be reverted.\n";

        return false;
    }
    */
}
