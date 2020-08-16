<?php

use yii\db\Migration;

/**
 * Class m200722_190131_create_table_orders
 */
class m200722_190131_create_table_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'client_name' => $this->string(),
            'client_phone' => $this->string(),
            'move_type_id' => $this->integer(),
            'move_size_id' => $this->integer(),
            'origin_city_id' => $this->integer(),
            'destination_city_id' => $this->integer(),
            'move_date' => $this->string()
        ], $tableOptions);

        $this->addForeignKey(
            'fk-move_type_id',
            'orders',
            'move_type_id',
            'move_types',
            'id',
            'CASCADE',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk-move_size_id',
            'orders',
            'move_size_id',
            'move_sizes',
            'id',
            'CASCADE',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk-origin_city_id',
            'orders',
            'origin_city_id',
            'cities',
            'id',
            'CASCADE',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk-destination_city_id',
            'orders',
            'destination_city_id',
            'cities',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-move_type_id', 'orders');
        $this->dropForeignKey('fk-move_size_id', 'orders');
        $this->dropForeignKey('fk-origin_city_id', 'orders');
        $this->dropForeignKey('fk-destination_city_id', 'orders');
        $this->dropTable('orders');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200722_190131_create_table_orders cannot be reverted.\n";

        return false;
    }
    */
}
